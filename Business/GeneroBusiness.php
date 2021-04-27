<?php

require_once('../DataAccess/GenerosDAO.php');

class GeneroBusiness {

    protected $GeneroDAO;

    function __construct($con){
        $this->GeneroDAO = new GeneroDAO($con);
    }

    public function getEntrada(){
        $entradas = $this->GeneroDAO->getOne($_GET["edit"]); 

        return $entradas;
    }
    
    public function getEntradas(){
        $entradas = $this->GeneroDAO->getAll(); 

        return $entradas;
    }

    public function getMod($id,$datos = array()){
        $entradas = $this->GeneroDAO->modify($id, $datos); 

        return $entradas;
    }
    public function getDel($id){
        $entradas = $this->GeneroDAO->delete($id); 

        return $entradas;
    }
    public function Add($datos=array()){
        $entradas = $this->GeneroDAO->save($datos); 

        return $entradas;
    }
}



?>