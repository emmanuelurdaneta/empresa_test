<?php


class Empleado{

    public $idEmpleado;
    public $nombreEmpleado;
    public $apellidoEmpleado;
    public $edadEmpleado;
    public $idProfesion;

    public function __construct($idEmpleado, $nombreEmpleado, $apellidoEmpleado, $edadEmpleado, $idProfesion)
    {
        $this->idEmpleado = $idEmpleado;
        $this->nombreEmpleado = $nombreEmpleado;
        $this->apellidoEmpleado = $apellidoEmpleado;
        $this->edadEmpleado = $edadEmpleado;
        $this->idProfesion = $idProfesion;
    }


    public static function consult()
    {
        $listaEmpleados=[];
        $conexionBD = BD::createInstance();
        $sql = $conexionBD->query("SELECT * FROM usr_empleados");


        foreach ($sql->fetchAll() as $empleado) {
            $listaEmpleados[] = new Empleado($empleado['idEmpleado'], $empleado['nombreEmpleado'], $empleado['apellidoEmpleado'], $empleado['edadEmpleado'], $empleado['idProfesion']);
        }

        return $listaEmpleados;

    }



    public static function create($nombre, $apellido, $edad, $profesion) {

        $conexionBD=BD::createInstance();

        $sql = $conexionBD->prepare("INSERT INTO usr_empleados (nombreEmpleado, apellidoEmpleado, edadEmpleado, idProfesion ) VALUE (?,?,?,?)");
        $sql->execute(array($nombre, $apellido, $edad, $profesion));


    }


    public static function delete($idEmpleado){

        
        $conexionBD=BD::createInstance();

        $sql = $conexionBD->prepare("DELETE FROM usr_empleados WHERE idEmpleado=?");
        $sql->execute(array($idEmpleado));
    }

    public static function search($idEmpleado){

        
        $conexionBD=BD::createInstance();

        $sql = $conexionBD->prepare("SELECT * FROM usr_empleados WHERE idEmpleado=?");
        $sql->execute(array($idEmpleado));

        $empleado=$sql->fetch();

        return new Empleado($empleado['idEmpleado'], $empleado['nombreEmpleado'], $empleado['apellidoEmpleado'], $empleado['edadEmpleado'], $empleado['idProfesion']);
    }


    public static function edit($id, $nombre, $apellido, $edad, $profesion){


        $conexionBD=BD::createInstance();

        $sql = $conexionBD->prepare("UPDATE usr_empleados SET nombreEmpleado=?, apellidoEmpleado=?, edadEmpleado=?, idProfesion=?  WHERE idEmpleado=? ");
        $sql->execute(array($nombre, $apellido, $edad, $profesion, $id));

    }
}

?>