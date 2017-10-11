<?php

namespace NeuWP
{
    class Translation
    {
        /**
         * @link https://developer.wordpress.org/reference/functions/get_locale/
         *
         * Retrieves the current locale.
         *
         * @return string The locale of the blog or from the {@see 'locale'} hook.
         */
        public function getLocale()
        {
            return get_locale();
        }

        /**
         * @link https://developer.wordpress.org/reference/functions/get_translations_for_domain
         *
         * Return the Translations instance for a text domain.
         *
         * @param $domain
         *
         * @return mixed
         */
        public function getTextDomain($domain)
        {
            return get_translations_for_domain($domain);
        }
    }
}
