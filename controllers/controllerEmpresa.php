<?php

include_once("models/empresa.php");
include_once("conexion.php");

BD::createInstance();

class ControllerEmpresa {

    public function home(){

        $empresas=Empresa::consult();

        include_once("views/empresas/home.php");
    }


    public function create(){

        if ($_POST) {
            
            print_r($_POST);
            $nombre =$_POST['nombre'];
            Empresa::create($nombre);
            header("Location:./?controller=Empresa&accion=home");
        }

        
        include_once("views/empresas/create.php");
    }

    public function edit(){

        

        if($_POST){

            $id=$_POST['id'];
            $nombre=$_POST['nombre'];

            Empresa::edit($id,$nombre);
            
            header("Location:./?controller=Empresa&accion=home");

        }

        $id = $_GET['id'];

        $empresa = Empresa::search($id);
        

        include_once("views/empresas/edit.php");
    }

    public function delete(){

        print_r($_GET);
        $id = $_GET['id'];
        Empresa::delete($id);

        header("Location:./?controller=Empresa&accion=home");

    }

   

}
?>