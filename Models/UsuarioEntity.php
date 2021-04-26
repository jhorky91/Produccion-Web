<?php 

class UsuarioEntity{
    
    private $id_usuario;
    private $status;
    private $nombre;
    private $apellido;
    private $fecha;
    private $fecha_nac;
    private $usuario;
    private $pass;
    private $email;
    private $telefono;
    private $pedidos;
    private $dinero_gastado;

    public function __construct(){

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
        return $this->fecha_nac;
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
        return $this->dinero_gastado;
    }



    public function setIDUsuario(){
        $this->id_usuario=$id_usuario;
    }
    public function setStatus(){
        $this->status=$status;
    }
    public function setNombre(){
        $this->nombre=$nombre;
    }
    public function setApellido(){
        $this->apellido=$apellido;
    }
    public function setFecha(){
        $this->fecha=$fecha;
    }
    public function setFechaNac(){
        $this->fecha_nac=$fecha_nac;
    }
    public function setUsuario(){
        $this->usuario=$usuario;
    }
    public function setPass(){
        $this->pass=$pass;
    }
    public function setEmail(){
        $this->email=$email;
    }
    public function setTelefono(){
        $this->telefono=$telefono;
    }
    public function setPedidos(){
        $this->pedidos=$pedidos;
    }
    public function setDineroGastado(){
        $this->dinero_gastado=$dinero_gastado;
    }


    
    


}



?>