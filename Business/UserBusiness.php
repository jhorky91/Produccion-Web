<?php

require_once('../DataAccess/UserDAO.php');

class UserBusiness {

    protected $UserDAO;

    function __construct($con){
        $this->UserDAO = new UserDAO($con);
    }
    
    public function getEntrada($id){
        $entradas = $this->UserDAO->getOne($id); 

        return $entradas;
    }

    public function getEntradas(){
        $entradas = $this->UserDAO->getAll(); 

        return $entradas;
    }
    public function contar(){
        return $this->UserDAO->contar();
    }

    public function contarActivos(){
        return $this->UserDAO->contarActivos();
    }
    public function SessionUser($datos = array()){
        $entradas = $this->UserDAO->userCliente($datos);
        return $entradas;
    }
    public function SessionAdmin($datos = array()){
        $entradas = $this->UserDAO->userAdmin($datos);
        return $entradas;
    }
}



?>