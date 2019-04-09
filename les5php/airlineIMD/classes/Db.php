<?php

    abstract class Db {
        private static $conn;

        public static function getInstance(){
            if( self::$conn != null ){
                //conn found, return conn
                echo "yeet";
                return self::$conn;
            }
            else{
                echo "yeeeeet";
                $config = parse_ini_file("config/config.ini");
                self::$conn = new PDO('mysql:host=localhost;dbname='.$config['db_name'], $config['db_user'], $config['db_password'], null);
                return self::$conn;
            }
        }
    }