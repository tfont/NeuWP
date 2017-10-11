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

        /**
         * @link https://developer.wordpress.org/reference/functions/get_user_locale/
         *
         * Retrieves the locale of a user.
         *
         * If the user has a locale set to a non-empty string then it will be
         * returned. Otherwise it returns the locale of get_locale().
         *
         * @param int $user_id
         * @return string The locale of the user.
         */
        public function getLocale($user_id = 0)
        {
            return get_user_locale($user_id);
        }
    }
}
