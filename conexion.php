<?php

class BD{


    private static $instance = NULL;

    public static function createInstance(){

        if(!isset( self::$instance)){

            $optionPDO[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;

            self::$instance= new PDO('mysql:host=localhost;dbname=db_empresa','root','root',$optionPDO);

        }

        return self::$instance;
    }

}


?>