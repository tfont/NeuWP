<?php

namespace NeuWP
{
    class Formatting
    {
        /**
         * @link https://developer.wordpress.org/reference/functions/add_query_arg/
         *
         * Retrieves a modified URL query string. The query string is automatically escaped.
         *
         * You can rebuild the URL and append query variables to the URL query by using this function.
         * There are two ways to use this function; either a single key and value, or an associative array.
         *
         * @param $key
         * @param bool $value
         * @param bool $url
         *
         * @return mixed
         */
        public function editUrlQuery($key, $value = FALSE, $url = FALSE)
        {
            return esc_url(add_query_arg($key, $value, $url));
        }
    }
}