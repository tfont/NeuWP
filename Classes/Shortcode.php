<?php

namespace NeuWP
{
    class Shortcode
    {
        /**
         * @link https://developer.wordpress.org/reference/functions/add_shortcode/
         * @link https://codex.wordpress.org/Function_Reference/add_shortcode
         *
         * @param $tag
         * @param $func
         *
         * @return mixed
         */
        public function add($tag, $func)
        {
            return add_shortcode($tag, $func);
        }

        /**
         * @link https://codex.wordpress.org/Function_Reference/shortcode_atts
         *
         * @param $pairs
         * @param $atts
         * @param string $shortcode
         *
         * @return mixed
         */
        public function attributes($pairs, $atts, $shortcode = '')
        {
            return shortcode_atts($pairs, $atts, $shortcode);
        }

        public function parse($content, $ignore_html = FALSE)
        {
            return do_shortcode($content, $ignore_html);
        }

        public function remove($tag)
        {
            return remove_shortcode($tag);
        }

        public function removeAll()
        {
            return remove_all_shortcodes();
        }
    }
}
