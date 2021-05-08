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

    public function getEntradas($where = array()){
        $entradas = $this->ClasificacionDAO->getAll($where); 

        return $entradas;
    }
    public function getMod(){
        $entradas = $this->ClasificacionDAO->modify($_GET["edit"], $_POST=array()); 

        return $entradas;
    }
    public function getDel(){
        $entradas = $this->ClasificacionDAO->delete($_GET["del"]); 

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