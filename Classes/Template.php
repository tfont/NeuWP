<?php

namespace NeuWP
{
    class Template
    {
        /**
         * @link https://developer.wordpress.org/reference/functions/is_front_page
         * @link https://codex.wordpress.org/Function_Reference/is_front_page
         *
         * @return bool
         */
        public function isFontPage()
        {
            return is_front_page();
        }

        /**
         * @link https://codex.wordpress.org/Function_Reference/is_home
         *
         * Determines if the query is for the blog homepage.
         *
         * @return bool
         */
        public function isHomePage()
        {
            return is_home();
        }
    }
}
