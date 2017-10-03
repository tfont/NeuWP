<?php

use \NeuWP as NeuWP;

require_once 'NeuWP.php';

class Example extends ExamplePlacementFunctions
{
    public function __construct()
    {
        $this->NeuWP(new NeuWP);
    }

    private function NeuWP(NeuWP $WordPress)
    {
        // Action objects
        $action = array
        (
            'pre_get_posts' => $WordPress->Actions->pre_get_posts,
            'admin_notices' => $WordPress->Actions->admin_notices
        );

        // Action Methods
        $WordPress->Action->add($action['pre_get_posts'], array($this, 'exampleFunction'), 8, 2);

        // Shortcode Methods
        $WordPress->Shortcode->add('example-shortcode-tag', array($this, 'exampleShortcodeFunction'));
        #$WordPress->Shortcode->attributes();
        #$WordPress->Shortcode->parse();
        $WordPress->Shortcode->remove('example-shortcode-tag');
        $WordPress->Shortcode->removeAll();


    }
}

abstract class ExamplePlacementFunctions
{
    public function exampleFunction()          {}
    public function exampleShortcodeFunction() {}
}
