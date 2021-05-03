<?php 

//############################################################################################################
//#########################--MODIFICACION DE TITULOS DE LA TABLA COMENTARIOS--################################
//############################################################################################################
/* 
require_once('../Helpers/config.php');
require_once('../Business/ComentarioBusiness.php');
$ComenB= new ComentarioBusiness($con);



foreach($ComenB->getEntradas() as $dat){
   $datos = array();
   if ($dat->getRating()==1){
      $titulo='Horrible';
      $dat->setTitulo($titulo);
   }else if ($dat->getRating()==2){
      $titulo='Muy mala';
      $dat->setTitulo($titulo);
   }else if ($dat->getRating()==3){
      $titulo='Safable';
      $dat->setTitulo($titulo);
   }else if ($dat->getRating()==4){
      $titulo='Muy buena';
      $dat->setTitulo($titulo);
   }else if ($dat->getRating()==5){
      $titulo='Espectacular';
      $dat->setTitulo($titulo);
   }

   $datos['status']=$dat->getStatus();
   $datos['fecha']=$dat->getFecha();
   $datos['rating']=$dat->getRating();
   $datos['titulo']=$dat->getTitulo();
   $datos['comentario']=$dat->getComentario();
   $datos['id_pelicula']=$dat->getIDPelicula();
   $datos['id_usuario']=$dat->getIDUsuario();

   $ComenB->getMod($dat->getIDComentario(),$datos);
}
 */
//############################################################################################################
//########--MODIFICACION DE NOMBRE, ACTORES,DIRECTORES Y DESCRIPCION DE LA TABLA COMENTARIOS--################
//############################################################################################################

require_once('../Helpers/config.php');
require_once('../Business/PeliculaBusiness.php');
$PeliB= new PeliculaBusiness($con);


$prod= json_decode(file_get_contents('../DataAccess/productos.json'),true);

foreach($PeliB->getEntradas() as $pel){
   
   foreach($prod as $productos){
      
         if($pel->getID() == $productos['id']){
            
            $datos = array(); 
            
            $datos['status'] = $pel->getStatus();
            $pel->setNombre($productos['nombre']);
            $datos['nombre'] = $pel->getNombre();

            $datos['precio'] = $pel->getPrecio();
            $datos['id_clasificacion'] = $pel->getIDClasificacion();
            $datos['duracion'] = $pel->getDuracion();
            $datos['anio'] = $pel->getAnio();
            
            $pel->setDirectores($productos['director']);
            $datos['directores'] = $pel->getDirectores();
            
            $pel->setActores($productos['actores']);
            $datos['actores'] = $pel->getActores();
            
            $pel->setDescripcion($productos['descripcion']);
            $datos['descripcion'] = $pel->getDescripcion();
            
            $PeliB->getMod($pel->getID(),$datos);
         }
         
      }
      
      
}



//############################################################################################################
//#########################################--FALTA HACER...--#############################################
//############################################################################################################
/* 

filtro por rating
lista de los 10 destacados(mejor rating) - en los carouseles -> HOME
modificar nombres de peliculas, actores, directores y descripcion
crear .json para agregar IPs por cada usuario ->prohibir comentar con la misma IP mas de una vez al dia.
filtrar comentarios con status en 0, para que no se vean

*/
?>