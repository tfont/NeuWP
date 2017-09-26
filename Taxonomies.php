<?php

require_once 'interfaces/iTaxonomies.php';

class NeuWP_Taxonomies implements iTaxonomies
{
    /**
     * @link https://codex.wordpress.org/Function_Reference/wp_get_post_terms
     *
     * Retrieve the terms for a post.
     *
     * Returns: an array of taxonomy terms, or empty array if no terms are found.
     * WP_Error if $taxonomy does not exist. See is_wp_error() for more information.
     *
     * @param int $post_id
     * @param string $taxonomy
     * @param array $args
     *
     * @return array|WP_Error
     */
    public function getTermsByPost($post_id = 0, $taxonomy = 'post_tag', $args = array())
    {
        if (isset($args['fields']) && !empty($args['fields']))
        {
            switch ($args['fields'])
            {
                case NWP::TERM_ID:
                    $args['fields'] = 'term_ids';
                    break;
                case NWP::NAME:
                    $args['fields'] = 'slugs';
                    break;
                case NWP::SLUG:
                    $args['fields'] = 'slugs';
                    break;
                case NWP::TERM_GROUP:
                    $args['fields'] = 'term_groups';
                    break;
                case NWP::TERM_TAXONOMY_ID:
                    $args['fields'] = 'term_taxonomy_ids';
                    break;
                case NWP::TAXONOMY:
                    $args['fields'] = 'taxonomys';
                    break;
                case NWP::DESCRIPTION:
                    $args['fields'] = 'descriptions';
                    break;
                case NWP::PARENT:
                    $args['fields'] = 'parents';
                    break;
                case NWP::COUNT:
                    $args['fields'] = 'counts';
                    break;
                case NWP::FILTER:
                    $args['fields'] = 'filters';
                    break;
                case '*':
                    $args['fields'] = 'all';
                    break;
            }
        }

        return wp_get_post_terms($post_id, $taxonomy, $args);
    }

    /**
     * @link https://codex.wordpress.org/Function_Reference/get_post_taxonomies
     *
     * Retrieve all taxonomies of a post with just the names.
     *
     * Returns: all taxonomy names for the given post or post object.
     *
     * @param int $post
     *
     * @return array
     */
    public function getNamesByPost($post = 0)
    {
        return get_post_taxonomies($post);
    }

    /**
     * @link https://developer.wordpress.org/reference/functions/get_terms/
     *
     * Retrieve the terms in a given taxonomy or list of taxonomies.
     *
     * You can fully inject any customizations to the query before it is sent, as well as control the output with a filter.
     *
     * The ‘get_terms’ filter will be called when the cache has the term and will pass the found term along with the array of $taxonomies and array of $args.
     * This filter is also called before the array of terms is passed and will pass the array of terms, along with the $taxonomies and $args.
     *
     * @param array $args
     * @param string $deprecated
     *
     * @return array|int|WP_Error
     */
    public function getTerms($args = array(), $deprecated = '')
    {
        return get_terms($args, $deprecated);
    }
}
