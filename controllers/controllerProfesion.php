<?php

include_once("models/profesion.php");
include_once("conexion.php");

BD::createInstance();

class ControllerProfesion {

    public function home(){

        $profesiones=Profesion::consult();



        include_once("views/profesiones/home.php");
    }


    public function create(){

        if ($_POST) {
            
            print_r($_POST);
            $nombre =$_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            Profesion::create($nombre, $descripcion);
            header("Location:./?controller=Profesion&accion=home");
        }

        $profesiones = Profesion::consult();
        include_once("views/profesiones/create.php");
    }

    public function edit(){

        

        if($_POST){

            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $descripcion=$_POST['descripcion'];

            Profesion::edit($id, $nombre, $descripcion);
            
            header("Location:./?controller=Profesion&accion=home");

        }

        $id = $_GET['id'];

        $profesion = Profesion::search($id);

        include_once("views/profesiones/edit.php");
    }

    public function delete(){

        print_r($_GET);
        $id = $_GET['id'];
        Profesion::delete($id);

        header("Location:./?controller=Profesion&accion=home");

    }


}
?>