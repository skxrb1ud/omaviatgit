<?php
define(USERNAME,"root");
define(PASSWORD,"");
class DB{
    static $instance;
    public static function GetInstance(){
        if(self::$instance == null){
            self::$instance = new PDO('mysql:host=localhost;dbname=test', USERNAME, PASSWORD);
        }
        return self::$instance;
    }
    public static function Execute($sql, $args){
        $s = self::GetInstance()->prepare($sql);
        $s->execute($args);
        return $s->fetchAll();
    }
}
?>