<?php

require_once('../DataAccess/PeliculasDAO.php');

class PeliculaBusiness {

    protected $PeliculasDAO;

    function __construct($con){
        $this->PeliculasDAO = new PeliculasDAO($con);
    }
    
    public function getEntradas(){
        $entradas = $this->PeliculasDAO->getAll(); 

        return $entradas;
    }

    public function contar(){
        return $this->PeliculasDAO->contar();
    }

    public function contarActivos(){
        return $this->PeliculasDAO->contarActivos();
    }

}



?>