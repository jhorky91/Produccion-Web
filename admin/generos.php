<?php
$GeneroSidebar = true;
include_once('header.php');

  //Devuelve el contenido de la tabla Clasificacion    
  //$generos = "SELECT id_genero, nombre FROM genero;";
  //$resultado = $con->query($generos); 
 require_once('../Business/GeneroBusiness.php');
  $GeneroB = new GeneroBusiness($con);
  
  //Fin del Select

if(isset($_GET['del'])){

  //eliminacion de generos  
  $id = $_GET['del'];
  $GeneroB->getDel($id);

  unset($_GET['del']);

    redirect('generos.php');
}
?>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Géneros</h1>
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
              <a href="modify-genero.php"><input class="btn btn-danger" type="submit" value="Añadir Género"></a>
              <input class="btn btn-danger" type="submit" value="Importar">
              <input class="btn btn-danger" type="submit" value="Exportar">
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <form method="POST" action="edit-pelicula.php" enctype="multipart/form-data">
                <table class="table table-xl-responsive-borderless" id="tablajson" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                    <tr align="center">
                      <th>ID</th>
                      <th>Status</th>
                      <th>Nombre</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  foreach($GeneroB->getEntradas() as $cat){ ?>
                    <tr align="center">
                    <td><?php echo $cat->getID(); ?></td>
                    <td><?php echo $cat->getStatus(); ?></td>
                      <td><?php echo $cat->getNombre(); ?></td>
                      <td><center>
                      <a href="modify-genero.php?edit=<?php echo $cat->getID();?>"><i class="fas fa-edit"></a></i>&nbsp;&nbsp;
                      <a href="generos.php?del=<?php echo $cat->getID();?>"><i class="fas fa-trash-alt"></i></a></i></center>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                  <tbody>
                </table>
              </form>
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
   
   </script> 

</body>

</html>
