<?php 

class AdminEntity{
    
    private $id_admin;
    private $status;
    private $nombre;
    private $apellido;
    private $fecha;
    private $usuario;
    private $pass;
    private $email;

    public function __construct($id_admin,$status,$nombre,$apellido,$fecha,$usuario,$pass,$email){
        $this->id_admin=$id_admin;
        $this->status=$status;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->fecha=$fecha;
        $this->usuario=$usuario;
        $this->pass=$pass;
        $this->email=$email;
    }

    public function getIDAdmin(){
        return $this->id_admin;
    }
    public function getStatus(){
        return $this->status;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getUsuario(){
        return $this->usuario;
    }
    public function getPass(){
        return $this->pass;
    }
    public function getEmail(){
        return $this->email;
    }


    


}



?>