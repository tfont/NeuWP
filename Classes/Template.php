<?php

namespace NeuWP
{
    /**
     * Class Template_Call
     *
     * @package NeuWP
     */
    final class Template_Call
    {
        /**
         * @link https://codex.wordpress.org/Plugin_API/Action_Reference/wp_head
         * @link https://codex.wordpress.org/Function_Reference/wp_head
         */
        public function head()
        {
            return wp_head();
        }

        /**
         * @link https://developer.wordpress.org/reference/functions/wp_footer/
         * @link https://codex.wordpress.org/Function_Reference/wp_footer
         */
        public function footer()
        {
            return wp_head();
        }
    }

    /**
     * Class Template_Script
     *
     * @package NeuWP
     */
    final class Template_Script
    {
        /**
         * Registers the file immediately
         *
         * @link https://developer.wordpress.org/reference/functions/wp_register_script/
         *
         * @param $handle
         * @param $src
         * @param array $deps
         * @param bool $ver
         * @param bool $in_footer
         *
         * @return bool
         */
        public function addImmediately($handle, $src, $deps = array(), $ver = FALSE, $in_footer = FALSE)
        {
            return wp_register_script($handle, $src, $deps, $ver, $in_footer);
        }

        /**
         * Add in a queue to register the file
         *
         * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
         *
         * @param $handle
         * @param string $src
         * @param array $deps
         * @param bool $ver
         * @param bool $in_footer
         */
        public function addAfterInit($handle, $src = '', $deps = array(), $ver = FALSE, $in_footer = FALSE)
        {
            return wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);
        }
    }

    /**
     * Class Template
     *
     * @package NeuWP
     */
    class Template
    {
        public $Call;
        public $Script;

        public function __construct()
        {
            $this->Call   = new Template_Call;
            $this->Script = new Template_Script;
        }

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

        /**
         * @link https://codex.wordpress.org/Function_Reference/get_header
         * @link https://developer.wordpress.org/reference/functions/get_header/
         *
         * @param null $name
         */
        public function getHeader($name = NULL)
        {
            return get_header($name);
        }

        /**
         * @link https://codex.wordpress.org/Function_Reference/get_sidebar
         *
         * @param null $name
         */
        public function getSsidebar($name = NULL)
        {
            return get_sidebar($name);
        }

        /**
         * @link https://codex.wordpress.org/Function_Reference/get_footer
         *
         * @param null $name
         */
        public function getFooter($name = NULL)
        {
            return get_sidebar();
        }

        /**
         * @link https://developer.wordpress.org/reference/functions/get_the_content/
         *
         * @param null $more_link_text
         * @param bool $strip_teaser
         */
        public function getContent($more_link_text = NULL, $strip_teaser = FALSE)
        {
            return get_the_content($more_link_text, $strip_teaser);
        }

        /**
         * @link https://developer.wordpress.org/reference/functions/get_the_excerpt/
         *
         * @param null $post
         */
        public function getExcerpt($post = NULL)
        {
            return get_the_excerpt($post);
        }

        /**
         * @link https://developer.wordpress.org/reference/functions/get_template_part/
         *
         * @param $slug
         * @param null $name
         */
        public function getPart($slug, $name = NULL)
        {
            return get_template_part($slug, $name);
        }
    }
}
