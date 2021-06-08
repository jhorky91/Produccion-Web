<?php

require_once('../DataAccess/PerfilDAO.php');

class PerfilBusiness{

    protected $PerfilDAO;

    function __construct($con){
        $this->PerfilDAO = new PerfilDAO($con);
    }

    public function getPerfiles(){
        $perfil = $this->PerfilDAO->getAll(); 

        return $perfil;
    }

    public function getPerfil($id){
        $perfil = $this->PerfilDAO->getOne($id); 

        return $perfil;
    }

    public function getMod($id,$datos=array()){
        $perfil = $this->PerfilDAO->modify($id,$datos); 

        return $perfil;
    }
    public function getDel($id){
        $perfil = $this->PerfilDAO->delete($id); 

        return $perfil;
    }
    public function Add($datos=array()){
        $perfil = $this->PerfilDAO->save($datos); 

        return $perfil;
    }
    public function contar(){
        return $this->PerfilDAO->contar();
    }

    

}