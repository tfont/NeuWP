<?php

namespace
{
    // TODO: create an autoloader

    require_once 'NWP.php';

    require_once 'Classes/Action.php';
    require_once 'Classes/Fields.php';
    require_once 'Classes/Formatting.php';
    require_once 'Classes/Hook.php';
    require_once 'Classes/Plugins.php';
    require_once 'Classes/Post.php';
    require_once 'Classes/Taxonomy.php';
    require_once 'Classes/Template.php';
    require_once 'Classes/Translation.php';
    require_once 'Classes/Shortcode.php';
    require_once 'Classes/User.php';

    require_once 'Classes/Filters.php';
    require_once 'Classes/Query.php';

    class NeuWP extends NWP
    {
        public $Action;
        public $Filters;
        public $Formatting;
        public $Hook;
        public $Plugins;
        public $Posts;
        public $Taxonomy;
        public $Template;
        public $Translation;
        public $Shortcode;
        public $user;

        public $fields;
        public $query;

        public function __construct()
        {
            $this->Action     = new \NeuWP\Action;
            $this->Filters    = new \NeuWP\Filters;
            $this->Formatting = new \NeuWP\Formatting;
            $this->Hook       = new \NeuWP\Hook;
            $this->Plugins    = new \NeuWP\Plugins;
            $this->Post       = new \NeuWP\Post;
            $this->Taxonomy   = new \NeuWP\Taxonomy;
            $this->Template   = new \NeuWP\Template;
            $this->Translation= new \NeuWP\Translation;
            $this->Shortcode  = new \NeuWP\Shortcode;
            $this->User       = new \NeuWP\User;

            $this->fields     = new \NeuWP\Fields;
            $this->query      = new \NeuWP\Query;
        }
    }
}
