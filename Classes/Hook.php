<?php

namespace NeuWP
{
    class Hook
    {
        public function registerActivation($file, $function)
        {
            return register_activation_hook($file, $function);
        }

        public function registerDeactivation($file, $function)
        {
            return register_deactivation_hook($file, $function);
        }
    }
}
