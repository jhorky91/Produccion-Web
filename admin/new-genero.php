<?php
include('header.php');
include_once('../Helpers/funcs.php');
require_once('../Business/GeneroBusiness.php');


$GeneroB = new GeneroBusiness($con);


    if(isset($_POST['add'])){
      
      $datos = array(
        'status'=>$_POST['status'],
        'nombre'=>$_POST['nombre']
      );
      $GeneroB->Add($datos);
        

        
        redirect('generos.php');
    }

    
?>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Nuevo Género</h1>
          <!--<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>-->
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-0">
              <!--<input class="btn btn-danger" type="submit" value="Añadir Nuevo">-->
            </div>
            <div class="card-body">
              <div class="table-responsive">
                    <form method="POST" action="" name="prod" enctype="multipart/form-data">
                      <table class="table bg-gradient-dark text-white" id="dataTable" width="100%" cellspacing="0">
                      <tr>
                          <td align="right"><label for="txtStatus">Status:</label</td>
                          <td><input type="text" id="txtStatus" name="status" size="50" class="bg-danger text-white"></td>
                        </tr>
                        
                        <tr>
                          <td align="right"><label for="txtName">Nombre:</label</td>
                          <td><input type="text" id="txtName" name="nombre" size="50" class="bg-danger text-white"></td>
                        </tr>
                        
                        <tr>
                          <td align="right"><input type="submit"  name="add" value="Guardar" id="btnSavePeli" class="btn btn-danger"></td>
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
      


    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <?php require_once('footer.php'); ?>


</body>

</html>
