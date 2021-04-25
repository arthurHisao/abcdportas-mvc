<?php

    namespace Sts\Models\Connection;

    use PDO;

    if(!defined("URL")) {
        exit("URL iválido");
    }

    class Connection {
        private static $Host = "localhost";
        private static $User = "root";
        private static $Pass = "kekkaishi";
        private static $Dbname = "abcdportas";
        private static $Connect = null;

        private static function connectDB() {
            try {
                if(self::$Connect == null) {
                    self::$Connect = new PDO("mysql:host=".self::$Host . ";dbname=".self::$Dbname, self::$User, self::$Pass);
                }
            } catch(Exception $ex) {
                echo "Erro: ". $ex->getMessage();
                die;
            }
            return self::$Connect;
        }

        public function getConnection() {
            return self::connectDB();
        }
    }