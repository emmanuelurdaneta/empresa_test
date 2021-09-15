<?php

class ControllerSite{

    public function home() {

        include_once("views/sites/home.php");

    }

    public function error(){

        include_once("views/sites/error.php");

    }

}

?>