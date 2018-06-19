<?php

namespace NeuWP
{
    use \NWP as NWP;

    abstract class aPost
    {
        public $numberposts      = NWP::NUMBERPOSTS;
        public $post_type        = NWP::POST_TYPE;
        public $orderBy          = NWP::ORDERBY;
        public $order            = NWP::ORDER;
        public $suppress_filters = NWP::SUPPRESS_FILTERS;

        // TODO: put these in NWP default constants
        public $perPage = -1;
        public $metaValue;
        public $metaCompare;
        public $metaKey;
    }
}