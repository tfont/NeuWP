<?php

interface iFilters
{
    public function add($tag, $function_to_add, $priority = 10, $accepted_args = 1);
}
