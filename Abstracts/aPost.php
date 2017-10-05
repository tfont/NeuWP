<?php

namespace NeuWP
{
    use \NWP as NWP;

    abstract class aPost
    {
        public $numberposts      = NWP::NUMBERPOSTS;
        public $post_type        = NWP::POST_TYPE;
        public $orderby          = NWP::ORDERBY;
        public $order            = NWP::ORDER;
        public $suppress_filters = NWP::SUPPRESS_FILTERS;
    }
}