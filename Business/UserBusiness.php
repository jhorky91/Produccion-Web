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

    public function getEntradas($where=array()){
        $entradas = $this->UserDAO->getAll($where); 

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
    public function cambioStatus($id,$sta){
        $entradas = $this->UserDAO->cambioStatus($id,$sta); 

        return $entradas;
    }
    public function delete($id) {
        $entradas = $this->UserDAO->delete($id);

        $entradas;
    }
    public function Add($datos) {
        $entradas = $this->UserDAO->save($datos);

        $entradas;
    }
    public function getMod($id,$datos) {
        $entradas = $this->UserDAO->modify($id,$datos);

        $entradas;
    }
    

}



?>