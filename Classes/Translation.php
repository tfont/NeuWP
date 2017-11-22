<?php

namespace NeuWP
{
    if (!function_exists('get_locale'))
    {
        function get_locale()
        {
            if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
            {
                return str_replace('-', '_', substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 5));
            }

            return 'en_US';
        }
    }

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

        public function getDateTime($dateTime, $pattern, $locale = NULL)
        {
            if (empty($locale))
            {
                $locale = get_locale();
            }

            $date      = new \DateTime($dateTime);
            $formatter = new \IntlDateFormatter($locale, \IntlDateFormatter::NONE, \IntlDateFormatter::NONE);

            if ($formatter->setPattern($pattern))
            {
                return $formatter->format($date);
            }

            return FALSE;
        }
    }
}
