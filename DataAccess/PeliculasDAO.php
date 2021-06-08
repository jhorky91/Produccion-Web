<?php

require_once('DAO.php');
require_once('../Models/PeliculaEntity.php');
require_once('../DataAccess/GenerosDao.php');
require_once('../DataAccess/SubGenerosDao.php');
require_once('../DataAccess/ComentariosDao.php');

class PeliculasDAO extends DAO{


    function __construct($con)
    {
        parent::__construct($con);
        $this->table = 'pelicula';
    }

    public function getOne($id){
        
        
        $sql = "SELECT * FROM $this->table WHERE id_pelicula=".$id;
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'PeliculaEntity')->fetch();
             
        return $resultado;
    }

    public function getAll($where = array()){
        
        $sWhere = array();
        $ord='';
        if(!empty($_GET['genero']) && !empty($_GET['subgenero']) ){
             $sWhere[]=' AND (GSG.id_genero ='.$where['genero'].' AND GSG.id_subgenero ='.$where['subgenero'].')'; 
        }
        if(!empty($_GET['genero']) && empty($_GET['subgenero']) ){
            $sWhere[]=' AND GSG.id_genero ='.$where['genero'];
        }
        if(!empty($_GET['subgenero']) && empty($_GET['genero'])){
            $sWhere[]=' AND GSG.id_subgenero ='.$where['subgenero'];
        }
        if(!empty($_GET['clasificacion'])){
            $sWhere[]=' AND P.id_clasificacion ='.$where['clasificacion'];
        }
        if(!empty($_GET['orden'])){
            if($_GET['orden']==1){
                $ord=' ORDER BY P.nombre';
            }else if($_GET['orden']==2){
                $ord=' ORDER BY P.nombre DESC';
            }else if($_GET['orden']==3){
                $ord=' ORDER BY P.anio';
            }else if($_GET['orden']==4){
                $ord=' ORDER BY P.anio DESC';
            }else if($_GET['orden']==5){
                $ord=' ORDER BY rating DESC, P.nombre';
            }else if($_GET['orden']==6){
                $ord=' ORDER BY rating, P.nombre';
            }
        }
        $sWhereStr='';
        if(!empty($sWhere)) { $sWhereStr=' '. implode(' ',$sWhere);
        }
                     
        $sql = "SELECT  P.id_pelicula,
                        P.status,
                        P.nombre,
                        P.precio,
                        P.id_clasificacion,
                        P.duracion,
                        P.anio,
                        P.directores,
                        P.actores,
                        P.descripcion,
                        AVG(C.rating) AS rating  
                FROM pelicula P
                INNER JOIN pelicula_genero GP ON P.id_pelicula=GP.id_pelicula
                INNER JOIN genero_subgenero GSG ON GP.id_genero_subgenero=GSG.id_genero_subgenero
                INNER JOIN comentario C ON P.id_pelicula = C.id_pelicula 
                WHERE P.status = 1 ".$sWhereStr.' GROUP BY  P.id_pelicula '.$ord;

        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'PeliculaEntity')->fetchAll();
        
        return $resultado;


    }

    public function save($datos = array()){

        $sql = "INSERT INTO $this->table(status,nombre,precio,id_clasificacion,duracion,anio,directores,actores,descripcion)
                 VALUES ('0','".$datos['nombre']."','".$datos['precio']."','".$datos['id_clasificacion']."','".$datos['duracion']."','".$datos['anio']."','".$datos['directores']."','".$datos['actores']."','".$datos['descripcion']."')";
        return $this->con->exec($sql);

    }

    public function modify($id, $datos = array()){
        $sql = "UPDATE $this->table SET 
                status = '".$datos['status']."',
                nombre ='".$datos['nombre']."',
                precio = '".$datos['precio']."',
                id_clasificacion = '".$datos['id_clasificacion']."',
                duracion = '".$datos['duracion']."',
                anio = '".$datos['anio']."',
                directores = '".$datos['directores']."',
                actores = '".$datos['actores']."',
                descripcion ='".$datos['descripcion']."' 
                    WHERE id_pelicula = ".$id;
        return $this->con->exec($sql);

    }

    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id_$this->table = $id";
        return $this->con->exec($sql);
    }
    public function destacados(){
        $sql = "SELECT AVG(C.rating) AS rating,
                       P.id_pelicula,
                       P.status,
                       P.nombre,
                       P.precio,
                       P.id_clasificacion,
                       P.duracion,
                       P.anio,
                       P.directores,
                       P.actores,
                       P.descripcion
        FROM pelicula P
        INNER JOIN comentario C ON P.id_pelicula = C.id_pelicula
        WHERE  P.status = 1 
        GROUP BY P.id_pelicula
        ORDER BY 1 DESC, P.nombre
        LIMIT 10";
        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'PeliculaEntity')->fetchAll();
        
        return $resultado;
      

    }

    public function getAllAnio($condicion){
        $sql = "SELECT  P.id_pelicula,
                        P.status,
                        P.nombre,
                        P.precio,
                        P.id_clasificacion,
                        P.duracion,
                        P.anio,
                        P.directores,
                        P.actores,
                        P.descripcion
                FROM pelicula P
                WHERE P.status = 1 AND P.anio =".$condicion;

        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'PeliculaEntity')->fetchAll();
        
        return $resultado;
    }
    public function getUltimos(){
        $sql = "SELECT  P.id_pelicula,
                        P.status,
                        P.nombre,
                        P.precio,
                        P.id_clasificacion,
                        P.duracion,
                        P.anio,
                        P.directores,
                        P.actores,
                        P.descripcion
                FROM pelicula P
                ORDER BY 1 DESC
                LIMIT 10";

        $resultado = $this->con->query($sql,PDO::FETCH_CLASS,'PeliculaEntity')->fetchAll();
        
        return $resultado;


    }

    
    
}

?>