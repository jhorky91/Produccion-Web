<?php
include('header.php');
include_once('../Helpers/funcs.php');
require_once('../Business/GeneroBusiness.php');


$GeneroB = new GeneroBusiness($con);

    //Guardamos un nuevo Genero
    if(isset($_POST['add'])){
      
      $datos = array(
        'status'=>$_POST['status'],
        'nombre'=>$_POST['nombre']
      );
      $GeneroB->Add($datos);
        redirect('generos.php');
    
    }

    //Modificamos un genero ya existente
    if(isset($_POST['mod'])) {
            
      $id = $_GET['edit'];
      $datos= array(
        'nombre'=> $_POST['nombre'],
        'status'=> $_POST['status']
      );     
      $GeneroB->getMod($id,$datos);       
      redirect('generos.php');
    }

    
?>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <?php if (isset($_GET['edit'])) {
            $Edit = true;
            $Genero = $GeneroB->getEntrada($_GET['edit']);?>
            
            <h1 class="h3 mb-2 text-gray-800">Editar Género</h1>
          
          <?php } else { ?>

          <h1 class="h3 mb-2 text-gray-800">Nuevo Género</h1>
         
         <?php } ?>
          
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            
            <?php if(isset($Edit)) {?>
            
            <div class="card-header py-1">
              <a href="modify-genero.php"><input class="btn btn-danger" type="submit" value="Añadir Nuevo" style="float: right;"></a>
            </div>
            
            <?php } ?>
            
            <div class="card-body">
              <div class="table-responsive">
                    <form method="POST" action="" name="prod" enctype="multipart/form-data">
                      <table class="table bg-gradient-dark text-white" id="dataTable" width="100%" cellspacing="0">
                      <tr>
                          <td align="right"><label for="txtStatus">Status:</label</td>
                          <td><input type="text" id="txtStatus" name="status" <?= isset($Edit)?'value="'.$Genero->getStatus().'"':''?> size="50" class="bg-danger text-white"></td>
                        </tr>
                        
                        <tr>
                          <td align="right"><label for="txtName">Nombre:</label</td>
                          <td><input type="text" id="txtName" name="nombre" <?= isset($Edit)?'value="'.$Genero->getNombre().'"':''?> size="50" class="bg-danger text-white"></td>
                        </tr>
                        
                        <tr>
                          <td align="right"><input type="submit"  name="<?= isset($Edit)?'mod':'add'?>" value="Guardar" id="btnSavePeli" class="btn btn-danger"></td>
                          <td align="left"><input type="reset" value="Reset" class="btn btn-danger"></td>
                        </tr>                         
                      </table>
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

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <script src="js/recib-prod.js"></script>
  <script src="js/recib-prod2.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
