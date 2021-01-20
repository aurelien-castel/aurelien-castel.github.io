<?php

    class Autoloader
    {

        static function register()
        {
            spl_autoload_register(array(__CLASS__,'autoload'));
        }

        public static function autoload($class_name)
        {
            if (stripos($class_name,"Controller") || $class_name == "Controller")
                require '../controllers/'.$class_name.'.php';
            elseif (stripos($class_name,"Model"))
                require '../models/'.$class_name.'.php';

        }
        



    }






















?>
