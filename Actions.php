<?php

class NeuWP_Actions
{
    /**
     * @link https://developer.wordpress.org/reference/hooks/pre_get_posts/
     * @link https://codex.wordpress.org/Plugin_API/Action_Reference/pre_get_posts
     *
     * @var string
     */
    public $pre_get_posts = NWP::PRE_GET_POSTS;

    /**
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
}
