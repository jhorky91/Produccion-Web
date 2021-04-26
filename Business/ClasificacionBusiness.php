<?php

require_once('../DataAccess/ClasificacionDAO.php');

class ClasificacionBusiness {

    protected $ClasificacionDAO;

    function __construct($con){
        $this->ClasificacionDAO = new ClasificacionDAO($con);
    }
    
    public function getEntradas(){
        $entradas = $this->ClasificacionDAO->getAll(); 

        return $entradas;
    }
    public function getDel(){
        $entradas = $this->ClasificacionDAO->delete($_GET["del"]); 

        return $entradas;
    }

}



?>