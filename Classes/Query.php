<?php

namespace NeuWP
{
    class Query
    {
        public $request;

        public function __construct()
        {
            $this->request = $GLOBALS['wp_query']->request;
        }

        /**
         * @link https://developer.wordpress.org/reference/classes/wp_query/
         * @link https://codex.wordpress.org/Class_Reference/WP_Query
         *
         * @param string $query
         *
         * @return WP_Query
         */
        public function newRequest($query = '')
        {
            return new \WP_Query($query);
        }
    }
}
