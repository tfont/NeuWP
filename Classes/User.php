<?php

namespace NeuWP
{
    class User
    {
        public function isAllow($capability)
        {
            return current_user_can($capability);
        }

        public function getCurrent()
        {
            return wp_get_current_user();
        }
    }
}
