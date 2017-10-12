<?php

namespace NeuWP
{
    class Option
    {
        /**
         * @link https://developer.wordpress.org/reference/functions/get_option
         * @link https://codex.wordpress.org/it:Riferimento_funzioni/get_option
         *
         * @param $option
         * @param bool $default
         *
         * @return mixed Value set for the option.
         */
        public function get($option, $default = FALSE)
        {
            return get_option($option, $default);
        }

        /**
         * @link https://developer.wordpress.org/reference/functions/update_option
         * @link https://codex.wordpress.org/Function_Reference/update_option
         *
         * @param $option
         * @param $value
         * @param null $autoload
         *
         * @return bool False if value was not updated and true if value was updated.
         */
        public function update($option, $value, $autoload = NULL)
        {
            return update_option($option, $value, $autoload);
        }


        /**
         * @link https://developer.wordpress.org/reference/functions/delete_option
         * @link https://codex.wordpress.org/Function_Reference/delete_option
         *
         * @param $option
         *
         * @return bool True, if option is successfully deleted. False on failure.
         */
        public function delete($option)
        {
            return delete_option($option);
        }
    }
}
