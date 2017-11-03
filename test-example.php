<?php

use \NeuWP as NeuWP;

require_once 'NeuWP.php';

class Example extends ExamplePlacementFunctions
{
    public function __construct()
    {
        $WordPress = new NeuWP;

        // Action objects
        $this->action = array
        (
            'admin_enqueue_scripts' => $WordPress->Action->admin_enqueue_scripts,
            'admin_notices'         => $WordPress->Action->admin_notices,
            'init'                  => $WordPress->Action->init,
            'pre_get_posts'         => $WordPress->Action->pre_get_posts,
            'widgets_init'          => $WordPress->Action->widgets_init,
            'wp_head'               => $WordPress->Action->wp_head,
            'wp_footer'             => $WordPress->Action->wp_footer,
            'wp_loaded'             => $WordPress->Action->wp_loaded,
            'homepage'              => $WordPress->Action->homepage
        );

        // Filter objects
        $this->filter = array
        (
            'posts_where' => $WordPress->Filters->posts_where
        );

        $this->NeuWP($WordPress);
    }

    private function NeuWP(NeuWP $WordPress)
    {
        // Template Methods
        $WordPress->Template->isFontPage();
        $WordPress->Template->isHomePage();

        // Action Methods
        $WordPress->Action->add($this->action['pre_get_posts'], array($this, 'exampleFunction'), 8, 2);

        // Shortcode Methods
        $WordPress->Shortcode->add('example-shortcode-tag', array($this, 'exampleShortcodeFunction'));
        #$WordPress->Shortcode->attributes();
        #$WordPress->Shortcode->parse();
        $WordPress->Shortcode->remove('example-shortcode-tag');
        $WordPress->Shortcode->removeAll();

        // Filter Methods
        $WordPress->Filters->add($this->filter['posts_where'],    array($this, 'exampleFunction'));
        $WordPress->Filters->remove($this->filter['posts_where'], array($this, 'exampleFunction'));

        // Option Methods
        $WordPress->Option->get('example_page_id',    123);
        $WordPress->Option->update('example_page_id', 321);
        $WordPress->Option->delete('example_page_id');

        $WordPress->Hook->registerActivation();


        // Formatting Methods
        $WordPress->Formatting->editUrlQuery(array
        (
            'foo' => FALSE,
            'baz' => 'qux'
        ),
        'http://example.com/link?foo=bar'); // http://example.com/link?baz=qux

        // Hook Methods
        // user Methods

        #$WordPress->Template->Call->head();
    }
}

abstract class ExamplePlacementFunctions
{
    protected $action;
    protected $filter;

    protected function exampleFunction()          {}
    protected function exampleShortcodeFunction() {}
}
