<?php

require_once('../DataAccess/ComentariosDAO.php');

class ComentarioBusiness {

    protected $ComentariosDAO;

    function __construct($con){
        $this->ComentariosDAO = new ComentariosDAO($con);
    }
    
    public function getEntradas(){
        $entradas = $this->ComentariosDAO->getAll(); 

        return $entradas;
    }

    public function contar(){
        return $this->ComentariosDAO->contar();
    }

    public function contarActivos(){
        return $this->ComentariosDAO->contarActivos();
    }

}



?>