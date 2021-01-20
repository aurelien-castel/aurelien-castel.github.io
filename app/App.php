<?php

    class App
    {

        private static $database;

        public function __construct()
        {
            $this->sessionStart();
            $this->autoloader();
        }


        private function autoloader()
        {
            require ('Autoloader.php');
            autoloader::register();
        }


        private function sessionStart()
        {
            session_start();
        }


        public static function getDb()
        {
            if(self::$database== null)
            {
                require "Database.php";
                self::$database = new Database();
            }

            return self::$database;

        }


    }







?>