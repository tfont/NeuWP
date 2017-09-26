<?php

interface iTaxonomies
{
    public function getTermsByPost($post_id = 0, $taxonomy = 'post_tag', $args = array());
    public function getNamesByPost($post = 0);
    public function getTerms($args = array(), $deprecated = '');
}
