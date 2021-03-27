<?php
include('inc/header.php');
include_once('functions/funcs.php');

include('functions/funimg.php');


/*if(isset($_FILES['tImg']))
  $imagen=move_uploaded_file($_FILES['tImg']['tmp_name'],'img/'.$_FILES['tImg']['name']);*/


//obtengo el contenido del archivo
//$datos = file_get_contents('../datos/productos.json');
//convierto a un array
//$datosJson = json_decode($datos,true);



    if(isset($_POST['add'])){   
  

        $nombre=$_POST['tName'];
        $precio=$_POST['tPrecio'];
        $clasif=$_POST['tClasi'];
        $dur=$_POST['tDur'];
        $anio=$_POST['tAnio'];
        $direct=$_POST['tDirect'];
        $actor=$_POST['tActor'];
        $descripcion=$_POST['tDescripcion'];
        
        
        //Inserta datos en pelicula
        $sql = "INSERT INTO pelicula(nombre, precio, id_clasificacion, duracion, anio, directores, actores, descripcion) 
        VALUES ('$nombre', '$precio', '$clasif', '$dur', '$anio', '$direct', '$actor', '$descripcion');";
        $count = $con->exec($sql);
        
        //Guarda el ultimo id_pelicula al insertar pelicula.
        $idPelicula = $con->lastInsertId();    

        $generos=$_POST['tGene'];
        //echo var_dump($generos);

        //Insertar generos en pelicula_genero
        foreach($generos as $gen){
          $sql2 = "INSERT INTO pelicula_genero(id_pelicula, id_genero)
          VALUES ($idPelicula, $gen);";
          $count2 = $con->exec($sql2);
          
        }        

        //redirect('pelicula.php');
        if($count > 0 ){
          print($count." Filas afectadas");
        }else{
          printf("ERROR");
        }
        
    }  
  ?>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Nueva Pelicula</h1>
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
                          <td align="right"><label for="txtName">Nombre:</label</td>
                          <td><input type="text" id="txtName" name="tName" size="50" class="bg-danger text-white"></td>
                        </tr>
                        <tr>
                          <td align="right"><label for="txtPrecio">Precio:</label</td>
                          <td><input type="text" id="txtPrecio" name="tPrecio"  size="10" class="bg-danger text-white"></td>
                        </tr>
                        <tr>
                          <td align="right"><label for="tClasi">Clasificación:</label</td>
                          <td>
                          <select name="tClasi" id="#clasi" class="bg-danger text-white">
                          <?php



                          //$clasi=json_decode(file_get_contents('../datos/clasificacion.json'),true);

                          $clasi = "SELECT id_clasificacion, nombre
                                    FROM clasificacion;";
                          $resultado = $con->query($clasi); 
                                             
                           
                          foreach($resultado as $clas){ ?>
                            <option class="bg-danger text-white" value="<?php echo $clas['id_clasificacion'] ?>"> <?php echo $clas['nombre'] ?> </option>
                          <?php } ?>
                          
                          </select>
                            
                          <!-- <input type="text" id="txtClasi" name="tClasi" size="5"  class="bg-danger text-white"> -->
                          
                          
                          </td>
                        </tr>
                        <!--Checkbox-->
                        <tr>
                          <td align="right"><label for="txtGene">Género:</label</td>
                          <td>
                          
                          <?php 
                          
                          //$categorias = json_decode(file_get_contents('../datos/categorias.json'),true);
                          $gener = "SELECT id_genero, nombre 
                                    FROM genero;";
                          $resultados = $con->query($gener); 


                          $cont=0;
                          foreach($resultados as $cat){ ?>
                          
                          
                          <input type="checkbox" id="generos" name="tGene[]" value="<?php echo $cat['id_genero'] ?>" size="5" class="bg-danger text-white">
                          <label class="bg-danger text-white" for="generos"><?php echo $cat['nombre'] ?></label>
                          
                            <?php $cont++; 
                            if($cont==3){
                              $cont=0;
                              echo "<br/>";
                            }?>
                          
                          <?php   } ?>
                          
                          </td>
                        </tr>
                        <tr>
                          <td align="right"><label for="txtAnio">Año:</label</td>
                          <td><input type="text" id="txtAnio" name="tAnio"  size="5" class="bg-danger text-white"></td>
                        </tr>
                        <tr>
                          <td align="right"><label for="txtDirect">Directores:</label</td>
                          <td><input type="text" id="txtDirect" name="tDirect"  size="50" class="bg-danger text-white"></td>
                        </tr>
                        <tr>
                          <td align="right"><label for="txtActor">Actores:</label</td>
                          <td><input type="text" id="txtActor" name="tActor"  size="50" class="bg-danger text-white"></td>
                        </tr>
                        <tr>
                          <td align="right"><label for="txtDur">Duración:</label</td>
                          <td><input type="text" id="txtDur" name="tDur"  size="5" class="bg-danger text-white"></td>
                        </tr>                                                  
                        <!--<tr>
                          <td align="right"><label for="txtImg">Imagen:</label</td>
                          <td><input type="file" id="txtImg" name="tImg" value="Examinar" accept="image/*" class="bg-danger text-white"></td>
                        </tr>-->
                        <tr>
                          <td align="right"><label for="txtDescripcion">Descripción</label</td>
                          <td align="left"><textarea id="txtDescripcion" name="tDescripcion" cols="80" rows="5" class="bg-danger text-white"></textarea></td>
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

  <!-- Logout Modal
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
  </div>-->

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
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>