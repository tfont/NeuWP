<?php

class NWP_Fields
{
    public $slug = 'slug';
}

abstract class NWP
{
    const TERM_ID          = 'term_id';
    const NAME             = 'name';
    const SLUG             = 'slug';
    const TERM_GROUP       = 'term_group';
    const TERM_TAXONOMY_ID = 'term_taxonomy_id';
    const TAXONOMY         = 'taxonomy';
    const DESCRIPTION      = 'description';
    const PARENT           = 'parent';
    const COUNT            = 'count';
    const FILTER           = 'filter';

    public $fields;

    public function __construct()
    {
        $this->fields = new NWP_Fields;
    }
}

class NeuWP_Taxonomies
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
    public function getTerms($post_id = 0, $taxonomy = 'post_tag', $args = array())
    {
        if (isset($args['fields']) && !empty($args['fields']))
        {
            switch ($args['fields'])
            {
                case 'term_id':
                    $args['fields'] = 'term_ids';
                    break;
                case 'name':
                    $args['fields'] = 'slugs';
                    break;
                case 'slug':
                    $args['fields'] = 'slugs';
                    break;
                case 'term_group':
                    $args['fields'] = 'term_groups';
                    break;
                case 'term_taxonomy_id':
                    $args['fields'] = 'term_taxonomy_ids';
                    break;
                case 'taxonomy':
                    $args['fields'] = 'taxonomys';
                    break;
                case 'description':
                    $args['fields'] = 'descriptions';
                    break;
                case 'parent':
                    $args['fields'] = 'parents';
                    break;
                case 'count':
                    $args['fields'] = 'counts';
                    break;
                case 'filter':
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
     * @return array
     */
    public function getNames($post = 0)
    {
        return get_post_taxonomies($post);
    }
}

class NeuWP extends NWP
{
    public $Taxonomies;

    public function __construct()
    {
        parent::__construct();

        $this->Taxonomies = new NeuWP_Taxonomies;
    }
}
