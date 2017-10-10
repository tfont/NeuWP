<?php

abstract class NWP
{
    const TERM_ID          = 'term_id';
    const NAME             = 'name';
    const SLUG             = 'slug';
    const TERM_GROUP       = 'term_group';
    const TERM_TAXONOMY_ID = 'term_taxonomy_id';
    const DESCRIPTION      = 'description';
    const PARENT           = 'parent';
    const COUNT            = 'count';
    const FILTER           = 'filter';

    // Post
    const NUMBERPOSTS      = 'numberposts';
    const POST_TYPE        = 'post_type';
    const ORDERBY          = 'orderby';
    const ORDER            = 'order';
    const SUPPRESS_FILTERS = 'suppress_filters';

    // Taxonomy
    const HIDE_EMPTY = 'hide_empty';
    const TAXONOMY   = 'taxonomy';

    // Filters
    const POST_LIMITS   = 'post_limits';
    const POSTS_REQUEST = 'posts_request';
    const POSTS_WHERE   = 'posts_where';

    // Actions
    const PRE_GET_POSTS = 'pre_get_posts';
    const ADMIN_NOTICES = 'admin_notices';
    const WP_HEAD       = 'wp_head';
    const WP_FOOTER     = 'wp_footer';
    const WP_LOADED     = 'wp_loaded';
    const INIT          = 'init';
    const ADMIN_ENQUEUE_SCRIPTS = 'admin_enqueue_scripts';
    const WIDGETS_INIT  = 'widgets_init';
}
