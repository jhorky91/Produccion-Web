<?php
include('header.php');
include_once('../Helpers/funcs.php');

// $sql = "SELECT id_comentario, status, fecha, rating, titulo, comentario, id_usuario, id_pelicula FROM comentario";
 //$consultaComentario = $con->query($sql);

 require_once('../Business/ComentarioBusiness.php');
 $ComentarioB = new ComentarioBusiness($con);

if(isset($_GET['del'])){

    $del = "DELETE FROM comentario WHERE id_comentario=".$_GET['del'];
    $delete = $con->exec($del);
  
    
    unset($_GET['del']);
    redirect('comentarios.php');
}
?>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Comentarios</h1>
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
                      <th>ID</th>
                      <th>Fecha</th>
                      <th>Usuario</th>
                      <th>Pelicula</th>
                      <th>Rating</th>
                      <th>Comentario</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  foreach($ComentarioB->getEntradas() as $peli){ ?>
                    <tr align="center">
                    <td><?php echo $peli->getIDComentario(); ?></td>
                    <td><?php echo $peli->getFecha(); ?></td>
                      <td>
                      
                      <?php
                      $sql1 = "SELECT nombre, apellido FROM usuario WHERE id_usuario=".$peli->getIDUsuario();
                      $consultaUsuario = $con->query($sql1);

                    foreach($consultaUsuario as $consul) {   
                    
                      echo $consul['nombre']." ".$consul['apellido']; 
                      
                    }
                      ?></td>
                      
                      <td>
                      <?php 
                       
                       $sql2 = "SELECT nombre FROM pelicula 
                      WHERE id_pelicula=".$peli->getIDPelicula();
                      $consultaPelicula = $con->query($sql2);
                       
                      foreach($consultaPelicula as $pel){ 
                              echo $pel['nombre'];
                        } ?>
                      </td>

                      <td><?php echo $peli->getRating(); ?></td>
                      <td>
                      <button type='button' onclick="alert('<?php  echo $peli->getComentario(); ?>')" class="btn btn-danger">Detalles</button>
                      </td>
                      <td><center>
                      <a href="edit-comentario.php?edit=<?php echo $peli->getIDComentario();?>"><i class="fas fa-edit"></a></i>&nbsp;&nbsp;
                      <a href="comentarios.php?del=<?php echo $peli->getIDComentario();?>"><i class="fas fa-trash-alt"></i></a></i></center>
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
            <span>&copy;Copyright 2020. Todos los derechos reservados.</span><br>
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
