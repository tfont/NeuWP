<?php

namespace NeuWP
{
    class ACF
    {
        /**
         * @link https://www.advancedcustomfields.com/resources/get_field/
         *
         * Returns the value of a specific field.
         *
         * @param $field_key
         * @param bool $post_id
         * @param bool $format_value
         *
         * @return bool|mixed|null|void
         */
        public function getField($field_key, $post_id = FALSE, $format_value = TRUE)
        {
            return get_field($field_key, $post_id, $format_value);
        }
    }
}