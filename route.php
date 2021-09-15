<?php 

include_once("controllers/controller".$controller.".php");

$objController ="controller".ucfirst($controller);

$controller = new $objController();

$controller->$accion();

?>