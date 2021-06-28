<?php
include('header.php');
include_once('../Helpers/funcs.php');

include_once(DIR_BASE.'Business/ComentarioBusiness.php');

?>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Editar Comentarios</h1>
          <!--<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>-->
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-1">
            
            </div>
            <div class="card-body">
              <div class="table-responsive">
                    <form method="POST" action="" name="com" enctype="multipart/form-data">
                      <table class="table bg-gradient-dark text-white" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                          <td align="right"><label for="txtStatus">Status:</label</td>
                          <td><input type="text" id="txtStatus" name="tStatus" value="<?php echo isset($dato)?$dato->getStatus():''?>" size="50" class="bg-danger text-white" required></td>
                        </tr>
                        
                        <tr>
                          <td align="right"><label for="txtUser">Usuario:</label</td>
                          <td><input type="text" id="txtUser" name="tUser" value="<?php echo isset($dato)?$dato->getIDUsuario():''?>" size="50" class="bg-danger text-white" required></td>
                        </tr>

                        <tr>
                          <td align="right"><label for="txtRating">ID Pelicula:</label</td>
                          <td><input type="text" id="txtRating" name="tRating" value="<?php echo isset($dato)?$dato->getIDPelicula():''?>" size="50" class="bg-danger text-white" required></td>
                        </tr>

                        <tr>
                          <td align="right"><label for="txtRating">Rating:</label</td>
                          <td><input type="text" id="txtRating" name="tRating" value="<?php echo isset($dato)?$dato->getRating():''?>" size="50" class="bg-danger text-white" required></td>
                        </tr>

                        <tr>
                          <td align="right"><label for="txtTitulo">Titulo:</label</td>
                          <td align="left"><textarea id="txtTitulo" name="tTitulo" cols="80" rows="5" class="bg-danger text-white" required><?php echo isset($dato)?$dato->getTitulo():''?></textarea></td>
                        </tr>                            
                        <tr>

                        <tr>
                          <td align="right"><label for="txtComentario">Comentario:</label</td>
                          <td align="left"><textarea id="txtComentario" name="tComentario" cols="80" rows="5" class="bg-danger text-white" required><?php echo isset($dato)?$dato->getComentario():''?></textarea></td>
                        </tr>                            
                        <tr>

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
