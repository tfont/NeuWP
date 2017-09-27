<?php

// TODO: create an autoloader

require_once 'NWP.php';

require_once 'Classes/Actions.php';
require_once 'Classes/Fields.php';
require_once 'Classes/Plugins.php';
require_once 'Classes/Posts.php';
require_once 'Classes/Taxonomies.php';

require_once 'Classes/Filters.php';
require_once 'Classes/Query.php';

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
