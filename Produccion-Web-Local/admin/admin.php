<?php
include('header.php'); 
include_once('../Helpers/funcs.php');


  //Devuelve el contenido de la tabla Clasificacion    
  $admins = "SELECT id_admin, status, nombre, apellido, fecha, usuario, email FROM admin;";
  $resultado = $con->query($admins); 
  //Fin del Select

if(isset($_GET['deladmin'])){
  
    $deleteAdm = "DELETE FROM admin WHERE id_admin=".$_GET["deladmin"];
    $count = $con->exec($deleteAdm);

    unset($_GET['deladmin']);
    redirect('admin.php');
}
 
?>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
   <div class="container-fluid">

          <!-- DataTales Example -->
<!-- ADMIN---------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->

      <h1 class="h3 mb-2 text-gray-800">Gestionar Admins</h1>
           <div class="card shadow mb-4">
            <div class="card-header py-1">
              <span class="m-0 font-weight-bold text-primary">Todo()</span>
              <span class="m-0 font-weight-bold text-primary">|</span>
              <span class="m-0 font-weight-bold text-primary">Publicado()</span>
              <span class="m-0 font-weight-bold text-primary">|</span>
              <span class="m-0 font-weight-bold text-primary">Borrador()</span>
              <span class="m-0 font-weight-bold text-primary">|</span>
              <span class="m-0 font-weight-bold text-primary">Pendiente()</span>
              <a href="new-admin.php"><input class="btn btn-danger" type="submit" value="Añadir Admin"></a>
              <input class="btn btn-danger" type="submit" value="Imprimir">
              <input class="btn btn-danger" type="submit" value="PDF">
              <input class="btn btn-danger" type="submit" value="CSV">
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-xl-responsive-borderless" id="tablajson2" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                    <tr align="center">
                      <th>ID</th>
                      <th>Status</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Fecha de nacimiento</th>
                      <th>Usuario</th>
                      <th>Email</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  foreach($resultado as $adm){ ?>
                    <tr align="center">
                      <td><?php echo $adm['id_admin']; ?></td>
                      <td><?php echo $adm['status']; ?></td>
                      <td><?php echo $adm['nombre'] ?></td>
                      <td><?php echo $adm['apellido'] ?></td>
                      <td><?php echo $adm['fecha']; ?></td>
                      <td><?php echo $adm['usuario'] ?></td>
                      <td><?php echo $adm['email']; ?></td>
                      
                      

                      <td><center>
                      <a href="edit-admin.php?editadmin=<?php echo $adm['id_admin'];?>"><i class="fas fa-edit"></a></i>&nbsp;&nbsp;
                      <a href="admin.php?deladmin=<?php echo $adm['id_admin'];?>"><i class="fas fa-trash-alt"></i></a></i></center>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
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
    $(document).ready(function() {
    $('#tablajson2').DataTable();
    } );
   </script> 

</body>

</html>
