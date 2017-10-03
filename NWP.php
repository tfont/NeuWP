<?php

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

    // Filters
    const POST_LIMITS      = 'post_limits';
    const POSTS_REQUEST    = 'posts_request';
    const POSTS_WHERE      = 'posts_where';

    // Actions
    const PRE_GET_POSTS    = 'pre_get_posts';
    const ADMIN_NOTICES    = 'admin_notices';
}
