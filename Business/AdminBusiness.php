<?php

require_once('../DataAccess/AdminDAO.php');

class AdminBusiness {

    protected $AdminDAO;

    function __construct($con){
        $this->AdminDAO = new AdminDAO($con);
    }
    
    public function getEntrada(){
        $entrada = $this->AdminDAO->getOne(); 

        return $entrada;
    }

    public function getEntradas(){
        $entradas = $this->AdminDAO->getAll(); 

        return $entradas;
    }

    public function contar(){
        return $this->AdminDAO->contar();
    }

    public function contarActivos(){
        return $this->AdminDAO->contarActivos();
    }

}



?>