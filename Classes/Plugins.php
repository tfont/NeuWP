<?php

namespace NeuWP
{
    require_once 'Plugins/ACF.php';

    class Plugins
    {
        public $acf;

        public function __construct()
        {
            if (class_exists('acf'))
            {
                $this->acf = new \NeuWP\ACF;
            }
        }

        public function isActive($plugin)
        {
            return is_plugin_active($plugin);
        }

        /**
         * @link https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
         *
         * Loads the plugin's translated strings.
         *
         * If the path is not given then it will be the root of the plugin directory.
         * The .mo file should be named based on the domain followed by a dash, and then the locale exactly.
         * For example, the locale for German is 'de_DE', and the locale for Danish is 'da_DK'.
         * If your plugin's text domain is "my-plugin" the Danish .mo and.po files should be named "my-plugin-da_DK.mo" and "my-plugin-da_DK.po"
         * Call this function in your plugin as early as the init action.
         *
         * If you call load_plugin_textdomain multiple times for the same domain, the translations will be merged.
         * If both sets have the same string, the translation from the original value will be taken.
         *
         * @param $domain
         * @param bool $deprecated
         * @param bool $plugin_rel_path
         * @return mixed
         */
        public function loadTranslatedStrings($domain, $deprecated = FALSE, $plugin_rel_path = FALSE)
        {
            return load_plugin_textdomain($domain, $deprecated, $plugin_rel_path);
        }

        /**
         * @link https://developer.wordpress.org/reference/functions/plugin_dir_path
         *
         * Get the filesystem directory path (with trailing slash) for the plugin __FILE__ passed in.
         *
         * @param $file
         * @return mixed
         */
        public function getDirectoryPath($file)
        {
            return plugin_dir_path($file);
        }
    }
}