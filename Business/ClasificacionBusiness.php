<?php

require_once('../DataAccess/ClasificacionDAO.php');

class ClasificacionBusiness {

    protected $ClasificacionDAO;

    function __construct($con){
        $this->ClasificacionDAO = new ClasificacionDAO($con);
    }
    public function getEntrada($id){
        $entradas = $this->ClasificacionDAO->getOne($id); 

        return $entradas;
    }

    public function getEntradas(){
        $entradas = $this->ClasificacionDAO->getAll(); 

        return $entradas;
    }
    public function getMod($id, $datos= array()){
        $entradas = $this->ClasificacionDAO->modify($id, $datos); 

        return $entradas;
    }
    public function Add($datos=array()){
        $entradas = $this->ClasificacionDAO->save($datos); 

        return $entradas;
    }
    public function getDel($id){
        $entradas = $this->ClasificacionDAO->delete($id); 

        return $entradas;
    }
    public function contar(){
        return $this->ClasificacionDAO->contar();
    }

    public function contarActivos(){
        return $this->ClasificacionDAO->contarActivos();
    }

}



?>