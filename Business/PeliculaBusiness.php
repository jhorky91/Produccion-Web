<?php

require_once('../DataAccess/PeliculasDAO.php');

class PeliculaBusiness {

    protected $PeliculasDAO;

    function __construct($con){
        $this->PeliculasDAO = new PeliculasDAO($con);
    }
    
    public function getEntrada($id){
        $entrada = $this->PeliculasDAO->getOne($id); 

        return $entrada;
    }

    public function getEntradas($where = array()){
        $entradas = $this->PeliculasDAO->getAll($where); 

        return $entradas;
    }

    public function contar(){
        return $this->PeliculasDAO->contar();
    }

    public function contarActivos(){
        return $this->PeliculasDAO->contarActivos();
    }
    public function getMod($id,$datos = array()){
        $entradas = $this->PeliculasDAO->modify($id, $datos); 

        return $entradas;
    }
    public function getDestacados(){
        $entradas = $this->PeliculasDAO->destacados(); 

        return $entradas;
    }
    public function getAllAnio($condicion){
        $entradas = $this->PeliculasDAO->getAllAnio($condicion); 

        return $entradas;
    }
    public function getUltimos(){
        $entradas = $this->PeliculasDAO->getUltimos(); 

        return $entradas;
    }
    public function cambioStatus($id,$sta){
        $entradas = $this->PeliculasDAO->cambioStatus($id,$sta); 

        return $entradas;
    }
}




?>