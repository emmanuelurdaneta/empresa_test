<?php

$controller="Site";
$accion="home";

if ( isset($_GET['controller']) && isset($_GET['accion'])) {

    if ( !empty($_GET['controller']) && !empty($_GET['accion'])) {
        
        $controller= $_GET['controller'];

        $accion= $_GET['accion'];

    }
}

require_once("views/template.php");

?>