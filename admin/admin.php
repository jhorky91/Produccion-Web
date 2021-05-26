<?php
$AdminSidebar = true;
include('header.php'); 
include_once('../Helpers/funcs.php');


  //Devuelve el contenido de la tabla Clasificacion    
  //$admins = "SELECT id_admin, status, nombre, apellido, fecha, usuario, email FROM admin;";
  //$resultado = $con->query($admins); 
  //Fin del Select
  
  require_once('../Business/AdminBusiness.php');
  $AdminB = new AdminBusiness($con);
  


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
              <a href="modify-admin.php"><input class="btn btn-danger" type="submit" value="Añadir Admin"></a>
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
                      <th>Fecha de creacion</th>
                      <th>Usuario</th>
                      <th>Email</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  foreach($AdminB->getEntradas() as $adm){ ?>
                    <tr align="center">
                      <td><?php echo $adm->getIDAdmin(); ?></td>
                      <td><?php echo $adm->getStatus(); ?></td>
                      <td><?php echo $adm->getNombre(); ?></td>
                      <td><?php echo $adm->getApellido(); ?></td>
                      <td><?php echo $adm->getFecha(); ?></td>
                      <td><?php echo $adm->getUsuario();?></td>
                      <td><?php echo $adm->getEmail(); ?></td>
                      
                      

                      <td><center>
                      <a href="modify-admin.php?edit=<?php echo $adm->getIDAdmin();?>"><i class="fas fa-edit"></a></i>&nbsp;&nbsp;
                      <a href="admin.php?deladmin=<?php echo $adm->getIDAdmin();?>"><i class="fas fa-trash-alt"></i></a></i></center>
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
      

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



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
