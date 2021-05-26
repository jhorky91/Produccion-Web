<?php
$AdminSidebar = true;
include('header.php');
include_once('../Helpers/funcs.php');


    //ADMIN--------------------------------------------------------------------------------------
    //-------------------------------------------------------------------------------------------

if(isset($_POST['tTipo'])){
  if($_POST['tTipo'] == "Admin"){
    if(isset($_POST['add'])){
        
    
        if(isset($_GET['editadmin'])){
            //modificando
            $id = $_GET['editadmin'];
        }else{
            //agrego 
            $id = date('j/n/Y, H:i:s');
        }

        $datosJson[$id] = array('id'=>$id,'tipo'=>$_POST['tTipo'], 'nombre'=>$_POST['tName'], 'apellido'=>$_POST['tApellido'],
         'fecha'=>$_POST['tFecha'], 'user'=>$_POST['tUser'], 'email'=>$_POST['tEmail'], 'pass'=>$_POST['tPass'], 'direccion'=>$_POST['tDireccion'],
         'telefono'=>$_POST['tTel'], 'pedidos'=>$_POST[''], 'gasto'=>$_POST['']);
    
        //trunco el archivo
        $fp = fopen('../../DataAccess/admin.json','w');
        //convierto a json string
        $datosString = json_encode($datosJson);
        //guardo el archivo
        fwrite($fp,$datosString);
        fclose($fp);
        redirect('user.php');
    }
   }
  }

    if(isset($_GET['editadmin'])){
        $dato = $datosJson[$_GET['editadmin']];
    }
?>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

        <?php if (isset($_GET['edit'])) {
                  $Edit = true;
                  $Admin = "Falta traer datos"?>
            
            <h1 class="h3 mb-2 text-gray-800">Editar Admin</h1>
          
        <?php } else { ?>

                  <h1 class="h3 mb-2 text-gray-800">Nuevo Admin</h1>
         
         <?php } ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">

          <?php if(isset($Edit)) {?>
            
                  <div class="card-header py-1">
                    <a href="modify-admin.php"><input class="btn btn-danger" type="submit" value="Añadir Nuevo" style="float: right;"></a>
                  </div>
            
            <?php } ?>

            <div class="card-body">
              <div class="table-responsive">
                    <form method="POST" action="" name="com" enctype="multipart/form-data">
                      <table class="table bg-gradient-dark text-white" id="dataTable" width="100%" cellspacing="0">
                      
                      <tr>
                          <td align="right"><label for="Status">Status:</label</td>
                          <td><input type="text" id="Status" name="tStatus" <?= isset($Edit)?'value="'.$Admin.'"':''?> size="50" class="bg-danger text-white"></td>
                     </tr>

                       <tr>
                          <td align="right"><label for="txtName">Nombre:</label</td>
                          <td><input type="text" id="txtName" name="tName" <?= isset($Edit)?'value="'.$Admin.'"':''?> size="50" class="bg-danger text-white"></td>
                        </tr>

                        <tr>
                          <td align="right"><label for="txtApellido">Apellido:</label</td>
                          <td><input type="text" id="txtApellido" name="tApellido" <?= isset($Edit)?'value="'.$Admin.'"':''?> size="50" class="bg-danger text-white"></td>
                        </tr>

                        <tr>
                          <td align="right"><label for="txtFecha">Fecha de nacimiento:</label</td>
                          <td><input type="date" id="txtFecha" name="tFecha" <?= isset($Edit)?'value="'.$Admin.'"':''?> size="10" class="bg-danger text-white"></td>
                        </tr>

                        <tr>
                          <td align="right"><label for="txtUser">User:</label</td>
                          <td><input type="text" id="txtUser" name="tUser" <?= isset($Edit)?'value="'.$Admin.'"':''?> size="50" class="bg-danger text-white"></td>
                        </tr>

                        <tr>
                          <td align="right"><label for="txtEmail">Email:</label</td>
                          <td><input type="text" id="txtEmail" name="tEmail" <?= isset($Edit)?'value="'.$Admin.'"':''?> size="50" class="bg-danger text-white"></td>
                        </tr>

                        <tr>
                          <td align="right"><label for="txtPass">Password:</label</td>
                          <td><input type="password" id="txtPass" name="tPass" <?= isset($Edit)?'value="'.$Admin.'"':''?>  size="50" class="bg-danger text-white">
                          <button id="txtPass" class="btn btn-danger" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                          </td>
                        </tr>

                        <tr>
                          <td align="right"><input type="submit" name="add" value="Guardar" class="btn btn-danger"></td>
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
