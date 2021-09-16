<?php


class Empresa{

    public $idEmpresa;
    public $nombreEmpresa;

    public function __construct($idEmpresa, $nombreEmpresa)
    {
        $this->idEmpresa = $idEmpresa;
        $this->nombreEmpresa = $nombreEmpresa;
    }


    public static function consult()
    {
        $listEmpresa=[];
        $conexionBD = BD::createInstance();
        $sql = $conexionBD->query("SELECT * FROM empresas");


        foreach ($sql->fetchAll() as $empresa) {
            $listEmpresa[] = new Empresa($empresa['idEmpresa'], $empresa['nombreEmpresa']);
            
        }

        return $listEmpresa;

    }



    public static function create($nombre) {

        $conexionBD=BD::createInstance();

        $sql = $conexionBD->prepare("INSERT INTO empresas (nombreEmpresa) VALUE (?)");
        $sql->execute(array($nombre));


    }


    public static function delete($id){

        
        $conexionBD=BD::createInstance();

        $sql = $conexionBD->prepare("DELETE FROM empresas WHERE idEmpresa=?");
        $sql->execute(array($id));
    }

    public static function search($id){

        
        $conexionBD=BD::createInstance();

        $sql = $conexionBD->prepare("SELECT * FROM empresas WHERE idEmpresa=?");
        $sql->execute(array($id));

        $empresa=$sql->fetch();

        return new Empresa($empresa['idEmpresa'], $empresa['nombreEmpresa']);
    }


    public static function edit($id, $nombre){


        $conexionBD=BD::createInstance();

        $sql = $conexionBD->prepare("UPDATE empresas SET nombreEmpresa=? WHERE idEmpresa=? ");
        $sql->execute(array($nombre, $id));

    }
}

?>