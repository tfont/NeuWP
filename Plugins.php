<?php

require_once 'ACF.php';

class NeuWP_Plugins
{
    public $acf;

    public function __construct()
    {
        if (class_exists('acf'))
        {
            $this->acf = new NeuWP_ACF;
        }
    }

    public function isActive($plugin)
    {
        return is_plugin_active($plugin);
    }
}