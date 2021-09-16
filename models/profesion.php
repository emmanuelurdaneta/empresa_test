<?php


class Profesion{

    public $idProfesion;
    public $nombreProfesion;
    public $descripcionProfesion;

    public function __construct($idProfesion, $nombreProfesion, $descripcionProfesion)
    {
        $this->idProfesion = $idProfesion;
        $this->nombreProfesion = $nombreProfesion;
        $this->descripcionProfesion = $descripcionProfesion;
    }


    public static function consult()
    {
        $listProfesion=[];
        $conexionBD = BD::createInstance();
        $sql = $conexionBD->query("SELECT * FROM std_profesion");


        foreach ($sql->fetchAll() as $profesion) {
            $listProfesion[] = new Profesion($profesion['idProfesion'], $profesion['nombreProfesion'], $profesion['descripcionProfesion']);
        }

        return $listProfesion;

    }



    public static function create($nombre, $descripcion) {

        $conexionBD=BD::createInstance();

        $sql = $conexionBD->prepare("INSERT INTO std_profesion (nombreProfesion, descripcionProfesion) VALUE (?,?)");
        $sql->execute(array($nombre, $descripcion));


    }


    public static function delete($idProfesion){

        
        $conexionBD=BD::createInstance();

        $sql = $conexionBD->prepare("DELETE FROM std_profesion WHERE idProfesion=?");
        $sql->execute(array($idProfesion));
    }

    public static function search($idProfesion){

        
        $conexionBD=BD::createInstance();

        $sql = $conexionBD->prepare("SELECT * FROM std_profesion WHERE idProfesion=?");
        $sql->execute(array($idProfesion));

        $profesion=$sql->fetch();

        return new Profesion($profesion['idProfesion'], $profesion['nombreProfesion'], $profesion['descripcionProfesion']);
    }


    public static function edit($id, $nombre, $descripcion){


        $conexionBD=BD::createInstance();

        $sql = $conexionBD->prepare("UPDATE std_profesion SET nombreProfesion=?, descripcionProfesion=?  WHERE idProfesion=? ");
        $sql->execute(array($nombre, $descripcion, $id));

    }



}

?>