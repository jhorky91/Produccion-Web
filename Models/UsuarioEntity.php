<?php 

class UsuarioEntity{
    
    private $id_usuario;
    private $status;
    private $nombre;
    private $apellido;
    private $fecha;
    private $fechaNac;
    private $usuario;
    private $pass;
    private $email;

    private $telefono;
    private $pedidos;
    private $dineroGastado;

    public function __construct($id_usuario,$status,$nombre,$apellido,$fecha,$fechaNac,$usuario,$pass,$email,$telefono,$pedidos,$dineroGastado){
        $this->id_usuario=$id_usuario;
        $this->status=$status;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->fecha=$fecha;
        $this->fechaNac=$fechaNac;
        $this->usuario=$usuario;
        $this->pass=$pass;
        $this->email=$email;
        $this->telefono=$telefono;
        $this->pedidos=$pedidos;
        $this->dineroGastado=$dineroGastado;
    }

    public function getIDUsuario(){
        return $this->id_usuario;
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
    public function getFechaNac(){
        return $this->fechaNac;
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
    public function getTelefono(){
        return $this->telefono;
    }
    public function getPedidos(){
        return $this->pedidos;
    }
    public function getDineroGastado(){
        return $this->dineroGastado;
    }


    
    


}



?>