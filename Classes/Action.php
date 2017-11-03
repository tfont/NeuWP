<?php

namespace NeuWP
{
    use \NWP as NWP;

    class Action
    {
        /**
         * @link https://developer.wordpress.org/reference/hooks/pre_get_posts/
         * @link https://codex.wordpress.org/Plugin_API/Action_Reference/pre_get_posts
         *
         * @var string
         */
        public $pre_get_posts = NWP::PRE_GET_POSTS;

        public $admin_notices = NWP::ADMIN_NOTICES;

        public $wp_head   = NWP::WP_HEAD;

        public $wp_footer = NWP::WP_FOOTER;

        public $wp_loaded = NWP::WP_LOADED;

        public $init      = NWP::INIT;

        public $admin_enqueue_scripts = NWP::ADMIN_ENQUEUE_SCRIPTS;

        public $widgets_init = NWP::WIDGETS_INIT;

        public $homepage = NWP::HOMEPAGE;

        /**
         * @link https://developer.wordpress.org/reference/functions/add_action/
         *
         * @param $tag
         * @param $function_to_add
         * @param int $priority
         * @param int $accepted_args
         *
         * @return true|void
         */
        public function add($tag, $function_to_add, $priority = 10, $accepted_args = 1)
        {
            return add_action($tag, $function_to_add, $priority, $accepted_args);
        }

        /**
         * @link https://developer.wordpress.org/reference/functions/remove_action/
         *
         * @param $tag
         * @param $function_to_remove
         * @param int $priority
         */
        public function remove($tag, $function_to_remove, $priority = 10)
        {
            return remove_filter($tag, $function_to_remove, $priority);
        }

        /**
         * @link https://developer.wordpress.org/reference/functions/do_action/
         *
         * @param $tag
         * @param string $arg
         */
        public function run($tag, $arg = '')
        {
            return do_action($tag, $arg);
        }
    }
}
