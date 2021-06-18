<?php

class Connect {

    private static $instance;
    public static function getConnection(){
        if(!isset(self::$instance)):
            self::$instance = new PDO('mysql:host=localhost; dbname=pdo; charset=utf8','root', '');
        else:
            return self::$instance;
        endif;
    }
}