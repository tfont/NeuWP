<?php

namespace NeuWP
{
    require_once '../Interfaces/iPost.php';
    require_once '../Abstracts/aPost.php';

    class Post extends aPost implements iPost
    {
        /**
         * @link https://developer.wordpress.org/reference/functions/get_posts/
         * @link https://codex.wordpress.org/Template_Tags/get_posts
         *
         * Retrieve list of latest posts or posts matching criter
         *
         * Returns: List of posts.
         *
         * @param null $args
         *
         * @return array
         */
        public function get($args = NULL)
        {
            return get_posts($args);
        }

        /**
         * @link https://developer.wordpress.org/reference/functions/get_post_type/
         *
         * Retrieves the post type of the current post or of a given post.
         *
         * @param null $post
         *
         * @return false|string
         */
        public function getPostType($post = NULL)
        {
            return get_post_type($post);
        }

        /**
         * @link https://developer.wordpress.org/reference/functions/get_page_by_path/
         * @link https://codex.wordpress.org/Function_Reference/get_page_by_path
         *
         * Retrieves a page or other post object given its path / slug.
         *
         * @param $page_path
         * @param string $output
         * @param string $post_type
         * @return array|void|WP_Post
         */
        public function getByPath($page_path, $output = OBJECT, $post_type = 'page')
        {
            return get_page_by_path($page_path, $output, $post_type);
        }

        /**
         * @link https://developer.wordpress.org/reference/functions/get_permalink/
         *
         * Retrieves the full permalink for the current post or post ID.
         *
         * @param int $post
         * @param $leavename
         *
         * @return false|string
         */
        public function getPermalink($post = 0, $leavename = FALSE)
        {
            return get_permalink($post, $leavename);
        }

        /**
         * @param null $post
         *
         * @return bool
         */
        public function getId($post = NULL)
        {
            $post = get_post($post);

            return !empty($post) ? $post->ID : FALSE;
        }

        /**
         * @param int $post
         *
         * @return mixed
         */
        public function getTitle($post = 0)
        {
            return get_the_title($post);
        }

        /**
         * Retrieve the Post Global Unique Identifier (guid).
         *
         * @param int $post
         *
         * @return mixed
         */
        public function getGuid($post = 0)
        {
            return get_the_guid($post);
        }

        /**
         * @link https://developer.wordpress.org/reference/functions/is_single
         *
         * @param string $post
         *
         * @return bool
         */
        public function isSingle($post = '')
        {
            return is_single($post);
        }

        /**
         * @link https://developer.wordpress.org/reference/functions/is_singular/
         *
         * Is the query for an existing single post of any post type (post, attachment, page, custom post types)?
         *
         * @param string $post_types
         *
         * @return bool
         */
        public function isSingleAnyType($post_types = '')
        {
            return is_singular($post_types);
        }

        public function getPost(Post $post, $post_type = 'post')
        {
            // 'post__in' => array(43,23,65); = getPostById(43,23,65)
            return get_posts([
                'post_type'      => $post_type,
                'posts_per_page' => $post->perPage,
                'meta_value'     => $post->metaValue,
                'meta_compare'   => $post->metaCompare,
                'orderby'        => $post->orderBy,
                'meta_key'       => $post->metaKey,
                'order'          => $post->order,
                'meta_query'     => array
                (
                    array
                    (
                        'key'     => 'custom_field_name',
                        'value'   => 1458, //valueof custom field
                        'compare' => '='
                    )
                )
            ]); // TODO: create a array_merge for 'meta_query'
        }

        /**
         * Get all sticky Posts by set parameter limitations
         *
         * @param bool $latest_first
         * @param null $limit
         * @param array|null $parameters
         *
         * @return array
         */
        function getSticky($latest_first = FALSE, $limit = NULL, array $parameters = NULL)
        {
            // get all sticky posts
            $sticky = get_option('sticky_posts');

            // sort the stickies, latest first
            if ($latest_first === TRUE)
            {
                rsort($sticky);
            }

            // number of stickies to show
            if ($limit !== NULL && is_int($limit))
            {
                $sticky = array_slice($sticky, 0, $limit);
            }

            $arguments = array
            (
                'post_status'    => 'publish',
                'post__in'       =>  $sticky,
                'posts_per_page' => -1,
            );

            if (!empty($parameters))
            {
                if (isset($parameters['post__in']))
                {
                    unset($parameters['post__in']);
                }

                $arguments = array_merge($arguments, $parameters);
            }

            return get_posts($arguments);
        }
    }

    /*
     * Get all IDs of Sticky Posts
     */
    function getStickyIDs()
    {
        return get_option('sticky_posts');
    }
}
