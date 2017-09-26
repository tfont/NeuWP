<?php

// TODO: create an autoloader

require_once 'NWP.php';

require_once 'Actions.php';
require_once 'Fields.php';
require_once 'Plugins.php.php';
require_once 'Posts.php';
require_once 'Taxonomies.php';

require_once 'Filters.php';
require_once 'Query.php';

class NeuWP extends NWP
{
    public $Actions;
    public $Filters;
    public $Plugins;
    public $Posts;
    public $Taxonomies;

    public $fields;
    public $query;

    public function __construct()
    {
        $this->Actions    = new NeuWP_Actions;
        $this->Filters    = new NeuWP_Filters;
        $this->Plugins    = new NeuWP_Plugins;
        $this->Posts      = new NeuWP_Posts;
        $this->Taxonomies = new NeuWP_Taxonomies;;

        $this->fields     = new NeuWP_Fields;
        $this->query      = new NeuWP_Query;
    }
}
