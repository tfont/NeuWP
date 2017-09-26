<?php

require_once 'interfaces/iFilters.php';
require_once 'abstracts/aFilters.php';

class NeuWP_Filters extends aFilters implements iFilters
{
    /**
     * @link https://developer.wordpress.org/reference/functions/add_filter/
     *
     * Hook a function or method to a specific filter action.
     *
     * WordPress offers filter hooks to allow plugins to modify various types of internal data at runtime.
     *
     * A plugin can modify data by binding a callback to a filter hook.
     * When the filter is later applied, each bound callback is run in order of priority, and given the opportunity to modify a value by returning a new value.
     *
     * @param $tag
     * @param $function_to_add
     * @param int $priority
     * @param int $accepted_args
     *
     * @return true
     */
    public function add($tag, $function_to_add, $priority = 10, $accepted_args = 1)
    {
        return add_filter($tag, $function_to_add, $priority, $accepted_args);
    }
}
