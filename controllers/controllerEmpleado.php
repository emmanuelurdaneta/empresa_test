<?php
include_once("models/empleado.php");
include_once("models/profesion.php");
include_once("conexion.php");

BD::createInstance();

class ControllerEmpleado {

    public function home(){

        $empleados=Empleado::consult();



        include_once("views/empleados/home.php");
    }


    public function create(){

        if ($_POST) {
            
            print_r($_POST);
            $nombre =$_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $profesion = $_POST['profesion'];
            Empleado::create($nombre,$apellido,$edad,$profesion);
            header("Location:./?controller=Empleado&accion=home");
        }

        $profesiones = Profesion::consult();
        include_once("views/empleados/create.php");
    }

    public function edit(){

        

        if($_POST){

            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $edad=$_POST['edad'];
            $profesion=$_POST['profesion'];

            Empleado::edit($id, $nombre, $apellido, $edad, $profesion);
            
            header("Location:./?controller=Empleado&accion=home");

        }

        $id = $_GET['id'];

        $empleado = Empleado::search($id);
        $profesiones = Profesion::consult();

        include_once("views/empleados/edit.php");
    }

    public function delete(){

        print_r($_GET);
        $id = $_GET['id'];
        Empleado::delete($id);

        header("Location:./?controller=Empleado&accion=home");

    }

    public function ver(){

    }

}
?>