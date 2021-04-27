<?php
  include_once('header.php'); 
  

  //Devuelve el contenido de la tabla peliculas  
  /*$peliculas = "SELECT *
                FROM pelicula;";
  $resultado = $con->query($peliculas); */

  require_once('../Business/PeliculaBusiness.php');
  $PeliculaB = new PeliculaBusiness($con);

if(isset($_GET['del'])){

  $sql = "DELETE FROM pelicula WHERE id_pelicula=".$_GET["del"];
  $count = $con->exec($sql);

    redirect('peliculas.php');
}
?>
  
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Peliculas</h1>
          <!--<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>-->
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-1">
              <span class="m-0 font-weight-bold text-primary">Todo()</span>
              <span class="m-0 font-weight-bold text-primary">|</span>
              <span class="m-0 font-weight-bold text-primary">Publicado()</span>
              <span class="m-0 font-weight-bold text-primary">|</span>
              <span class="m-0 font-weight-bold text-primary">Borrador()</span>
              <span class="m-0 font-weight-bold text-primary">|</span>
              <span class="m-0 font-weight-bold text-primary">Pendiente()</span>
              <a href="new-pelicula.php"><input class="btn btn-danger" type="submit" value="Añadir Pelicula"></a>
              <input class="btn btn-danger" type="submit" value="Importar">
              <input class="btn btn-danger" type="submit" value="Exportar">
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <form method="POST"  enctype="multipart/form-data">
                
                <div style="overflow-x:auto;">
                <table class="table table-xl-responsive-borderless"  id="tablajson" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                    <tr align="center">
                      <th>Id</th>
                      <th>Status</th>
                      <th>Nombre</th>
                      <th>Imagen</th>
                      <th>Precio</th>
                      <th>Clasificacion</th>
                      <th>Genero</th>
                      <th>Duracion</th>                                            
                      <th>Año</th>
                      <th>Directores</th>
                      <th>Actores</th>
                      <th>Descripcion</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  foreach($PeliculaB->getEntradas() as $peli){ ?>
                    <tr align="center">
                    <td><?php echo $peli->getID(); ?></td>
                    <td><?php echo $peli->getStatus(); ?></td>
                      <td><?php echo $peli->getNombre(); ?></td>
                      <td><!-- <img class="img-fluid" src=" --><?php 
                                       /*  if (is_array($peli['imagen'])) {
                                           echo 'img/'.$peli['imagen']['name'];
                                        } else {
                                        echo '../images/'.$peli['imagen'];
                                        }; */
                          ?><!--" >--></td>
                      <td><?php echo $peli->getPrecio(); ?></td>
                      <td><?php echo $peli->getIDClasificacion(); ?></td>
                      <td><?php 

/*                         if (is_array($gen['nombre'])) {
                        
                            foreach ($gen['nombre'] as $gen) {
                              
                              //$categorias = json_decode(file_get_contents('../datos/categorias.json'),true);
                              //Devuelve el contenido de la tabla Clasificacion    
                              $categorias = "SELECT id_genero, nombre 
                                              FROM genero;
                                              WHERE ";
                              $resultado2 = $con->query($categorias); 
                              //Fin del Select                          
                              
                              echo ''.$categorias[$gen]['nombre'].'<br>'; 
                              
                            };
                        }  */
                        /*$categorias = "SELECT genero.nombre
                        FROM pelicula_genero INNER JOIN genero ON pelicula_genero.id_genero = genero.id_genero
                        where pelicula_genero.id_pelicula=".$peli['id_pelicula'];*/
                        
                        /*Arreglar esto*/

###########################################################################################################################
###########################################################################################################################
###########################################################################################################################
###########################################################################################################################

                        /*$categorias = "SELECT genero.nombre
                        FROM pelicula_genero 
                        INNER JOIN genero_subgenero ON pelicula_genero.id_genero_subgenero = genero_subgenero.id_genero_subgenero
                        INNER JOIN genero ON genero_subgenero.id_genero = genero.id_genero
                        INNER JOIN subgenero ON genero_subgenero.id_subgenero = subgenero.id_subgenero                        
                        where pelicula_genero.id_pelicula=".$peli['id_pelicula'];

                        $gen = $con->query($categorias);
                        $b = $gen->fetchAll(PDO::FETCH_COLUMN, 0);
                        $c = implode(', ', $b);
                        echo $c;*/

                      ?>
                      </td>
                      <td><?php echo $peli->getDuracion(); ?></td>
                      <td><?php echo $peli->getAnio(); ?></td>
                      <td><?php echo $peli->getDirectores(); ?></td>
                      <td><?php echo $peli->getActores(); ?></td>
                      <td>
                      <button type='button' onclick="alert('<?php echo $peli->getDescripcion(); ?>')" class="btn btn-danger">Descripcion</button>
                      </td>
                      <td><center>
                      <a href="edit-pelicula.php?edit=<?php echo $peli->getID();?>"><i class="fas fa-edit"></a></i>&nbsp;&nbsp;
                      <a href="peliculas.php?del=<?php echo $peli->getID();?>"><i class="fas fa-trash-alt"></i></a></i></center>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                  <tbody>
                </table>
                </div>
              </form>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>&copy;Copyright 2021. Todos los derechos reservados.</span><br>
            <span>Movie Shop</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>            

  <?php require_once('footer.php'); ?>

  <script>
   $(document).ready(function() {
    $('#tablajson').DataTable();
    } );
   
   </script> 

</body>

</html>
