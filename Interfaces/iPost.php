<?php

namespace NeuWP
{
    interface iPost
    {
        public function get($args = NULL);
        public function getPostType($post = NULL);
        public function getByPath($page_path, $output = OBJECT, $post_type = 'page');
        public function getPermalink($post = 0, $leavename = FALSE);
        public function getId($post = NULL);
        public function getTitle($post = 0);
        public function getGuid($post = 0);
        public function isSingle($post = '');
        public function isSingleAnyType($post_types = '');
    }
}

/*
namespace
{
    if (!function_exists('get_posts'))     { function get_posts($args)     { return !([$args]); }};
    if (!function_exists('get_post_type')) { function get_post_type($post) { return !([$post]); }};
}*/
