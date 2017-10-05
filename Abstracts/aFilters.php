<?php

namespace NeuWP
{
    use \NWP as NWP;

    abstract class aFilters
    {
        /**
         * @link https://codex.wordpress.org/Plugin_API/Filter_Reference/post_limits
         *
         * This filter applies to a query's LIMIT clause before the query is sent to the database, allowing you to define a new query LIMIT.
         *
         * @var string
         */
        public $post_limits = NWP::POST_LIMITS;

        public $posts_request = NWP::POSTS_REQUEST;

        /**
         * @link https://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
         *
         * This filter applies to the posts where clause and allows you to restrict which posts will show up in various areas of the site.
         * Combined with restrict_manage_posts it allows you to only show posts matching specific conditions.
         *
         * @var string
         */
        public $posts_where = NWP::POSTS_WHERE;
    }
}
