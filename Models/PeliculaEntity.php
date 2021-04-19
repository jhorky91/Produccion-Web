<?php 

class PeliculaEntity{
    
    private $id_pelicula;
    private $status;
    private $nombre;
    private $precio;
    private $id_clasificacion;
    private $duracion;
    private $anio;
    private $directores;
    private $actores;
    private $descripcion;

    private $gener;
    private $sgener;

    private $comentarios; //array
    
    public function __construct(){}

    public function setter($status,$nombre,$precio,$id_clasificacion,$duracion,$anio,$directores,$actores,$descripcion,$gener){
      
        $this->status=$status;
        $this->nombre=$nombre;
        $this->precio=$precio;
        $this->id_clasificacion=$id_clasificacion;
        $this->duracion=$duracion;
        $this->anio=$anio;
        $this->directores=$directores;
        $this->actores=$actores;
        $this->descripcion=$descripcion;
        $this->gener=array();
        $this->gener=$gener;

        $this->comentarios=array();
        
    }

    public function getIDPelicula(){
        return $this->id_pelicula;
    }
    public function getStatus(){
        return $this->status;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function getIDClasificacion(){
        return $this->id_clasificacion;
    }
    public function getDuracion(){
        return $this->duracion;
    }
    public function getAnio(){
        return $this->anio;
    }
    public function getDirectores(){
        return $this->directores;
    }
    public function getActores(){
        return $this->actores;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getGenero(){
        return $this->gener;
    }
    
    public function addPelicula(){
       
        $hostname = 'localhost';
        $database = 'produccion';
        $username = 'root';
        $password = '';
        $port = '3306';
        
       try {        
         $con = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
         //print "Conexión exitosa!";
       }
       catch (PDOException $e) {
           //print "¡Error!: " . $e->getMessage();
           die();
       }  
        
          
        //Inserta datos en pelicula
        $sql = "INSERT INTO pelicula(status,nombre, precio, id_clasificacion, duracion, anio, directores, actores, descripcion) 
        VALUES ('$this->status','$this->nombre', '$this->precio', '$this->id_clasificacion', 
        '$this->duracion', '$this->anio', '$this->directores', '$this->actores', '$this->descripcion');";
        $count = $con->exec($sql);
        
        //Guarda el ultimo id_pelicula al insertar pelicula.
        
        $this->id_pelicula=$con->lastInsertId();    
        

        //Insertar generos en pelicula_genero
        
        $this->sgener=1 ;
         foreach($this->getGenero() as $gen){
            
          $sql = "INSERT INTO pelicula_genero(id_pelicula, id_genero,id_subgenero)
          VALUES ('$this->id_pelicula','$gen',$this->sgener);";
          $count2 = $con->exec($sql);
        }
        
        if($count > 0 ){
            print($count." Filas afectadas");
          }else{
            printf("ERROR");
          } 

          if($count2 > 0 ){
            print($count2." Filas afectadas");
          }else{
            printf("ERROR");
          }      

    }
    public function delPelicula($idpeli){
        
        $hostname = 'localhost';
        $database = 'produccion';
        $username = 'root';
        $password = '';
        $port = '3306';
        
       try {        
         $con = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
         //print "Conexión exitosa!";
       }
       catch (PDOException $e) {
          // print "¡Error!: " . $e->getMessage();
           die();
       } 
          

        $sql = "DELETE 
        FROM pelicula_genero
        WHERE id_pelicula=".$idpeli;
        $count = $con->exec($sql); 

        $sql = "DELETE 
        FROM pelicula 
        WHERE id_pelicula=".$idpeli;
        $count = $con->exec($sql);  
    }
    

}

?>