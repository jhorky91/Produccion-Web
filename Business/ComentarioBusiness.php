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

    public function getEntradaIDPeli($id){
        $entradas = $this->ComentariosDAO->getAllIDPeli($id); 

        return $entradas;
    }
    public function getEntradaIDUser($id){
        $entradas = $this->ComentariosDAO->getAllIDUser($id); 

        return $entradas;
    }
    public function getMod($id,$datos = array()){
        $entradas = $this->ComentariosDAO->modify($id, $datos); 

        return $entradas;
    }
    public function getAdd($datos = array()){
        $entradas = $this->ComentariosDAO->save($datos); 

        return $entradas;
    }

    public function getRating($id){
        $entradas = $this->ComentariosDAO->calRating($id); 

        return $entradas;
    }
    public function cambioStatus($id,$sta){
        $entradas = $this->AdminDAO->cambioStatus($id,$sta); 

        return $entradas;
    }

}



?>