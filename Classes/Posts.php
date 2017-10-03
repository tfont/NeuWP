<?php

namespace NeuWP
{
    require_once '../Interfaces/iPosts.php';

    class Posts implements iPosts
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
    }
}
