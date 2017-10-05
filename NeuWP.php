<?php

namespace
{
    // TODO: create an autoloader

    require_once 'NWP.php';

    require_once 'Classes/Action.php';
    require_once 'Classes/Fields.php';
    require_once 'Classes/Formatting.php';
    require_once 'Classes/Plugins.php';
    require_once 'Classes/Posts.php';
    require_once 'Classes/Taxonomy.php';

    require_once 'Classes/Filters.php';
    require_once 'Classes/Query.php';

    class NeuWP extends NWP
    {
        public $Action;
        public $Filters;
        public $Formatting;
        public $Plugins;
        public $Posts;
        public $Taxonomy;
        public $Shortcode;

        public $fields;
        public $query;

        public function __construct()
        {
            $this->Action     = new \NeuWP\Action;
            $this->Filters    = new \NeuWP\Filters;
            $this->Formatting = new \NeuWP\Formatting;
            $this->Plugins    = new \NeuWP\Plugins;
            $this->Posts      = new \NeuWP\Posts;
            $this->Taxonomy   = new \NeuWP\Taxonomy;
            $this->Shortcode  = new \NeuWP\Shortcode;

            $this->fields     = new \NeuWP\Fields;
            $this->query      = new \NeuWP\Query;
        }
    }
}
