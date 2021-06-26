<?php
//
include('header.php');
include_once('../Helpers/funcs.php');

require_once('../Business/PeliculaBusiness.php');
require_once('../Business/GeneroBusiness.php');
require_once('../Business/SubGeneroBusiness.php');
require_once('../Business/ClasificacionBusiness.php');

$PeliculaB = new PeliculaBusiness($con);
$GeneroB = new GeneroBusiness($con);
$SubGeneroB = new SubGeneroBusiness($con);
$ClasificacionB = new ClasificacionBusiness($con);  

    if(isset($_POST['add'])){
      $res = $_POST['tGene'];
      
      $datos = array('nombre'=>$_POST['tName'],
                     'precio'=>$_POST['tPrecio'], 
                     'id_clasificacion'=>$_POST['tClasi'], 
                     'anio'=>$_POST['tAnio'], 
                     'directores'=>$_POST['tDirect'], 
                     'actores'=>$_POST['tActor'],
                     'duracion'=>$_POST['tDur'], 
                     'descripcion'=>$_POST['tDescripcion'],
                     'generos' => $_POST['tGene'],
                     'subgeneros' => $_POST['tSubGene']);
    

      $id=$PeliculaB->Add($datos);

      //IMAGENES
      if(!empty($_FILES['imagen'])){
        $PeliculaB->saveImage($id,$_FILES['imagen']);
      }
      // y CAMPOS DINAMICOS
      //redirect('peliculas.php');
    
    }

    //FALTA HACER EL MODD DE PELICULA
    if(isset($_POST['mod'])) {

      $datos = array('status'=>$_POST['status'], 
                    'nombre'=>$_POST['tName'],
                    'precio'=>$_POST['tPrecio'], 
                    'id_clasificacion'=>$_POST['tClasi'], 
                    'anio'=>$_POST['tAnio'], 
                    'directores'=>$_POST['tDirect'], 
                    'actores'=>$_POST['tActor'],
                    'duracion'=>$_POST['tDur'], 
                    'descripcion'=>$_POST['tDescripcion']);

      $id = $_GET['edit'];
      $GeneroB->getDel($id);

      $res = $_POST['tGene'];
      $datos= array(
        'nombre'=> $_POST['nombre'],
        'status'=> $_POST['status']
      );
      $GeneroB->Add($datos, $res);
      
      //IMAGENES
      if(!empty($_FILES['imagen'])){
        $PeliculaB->saveImage($id,$_FILES['imagen']);
      }

      redirect('generos.php');
    }
  ?>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <?php if (isset($_GET['edit'])) {
            $Edit = true;
            $Pelicula = $PeliculaB->getEntrada($_GET['edit']);
            ?>
            
            <h1 class="h3 mb-2 text-gray-800">Editar Género</h1>
          
          <?php } else { ?>

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Nueva Pelicula</h1>
          <!--<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>-->
          
            <?php } ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-0">
              <!--<input class="btn btn-danger" type="submit" value="Añadir Nuevo">-->
            </div>
            <?php if(isset($Edit)) {?>
            
            <div class="card-header py-1">
              <a href="modify-pelicula.php"><input class="btn btn-danger" type="submit" value="Añadir Nuevo" style="float: right;"></a>
            </div>
            
            <?php } ?>

            <div class="card-body">
              <div class="table-responsive">
                    <form method="POST" action="" name="prod" enctype="multipart/form-data">
                      <table class="table bg-gradient-dark text-white" id="dataTable" width="100%" cellspacing="0">
                        <?php if(isset($Edit)) { ?>
                        <tr>
                          <td align="right"><label for="txtStatus">Status:</label</td>
                          <td><input type="text" id="txtStatus" name="status" value="<?= $Pelicula->getStatus()?>" size="50" class="bg-danger text-white"></td>
                        </tr>
                        <?php } ?>
                        <tr>
                          <td align="right"><label for="txtName">Nombre:</label</td>
                          <td><input type="text" id="txtName" name="tName" <?= isset($Edit)?'value="'.$Pelicula->getNombre().'"':''?> size="50" class="bg-danger text-white"></td>
                        </tr>
                        <tr>
                          <td align="right"><label for="txtPrecio">Precio:</label</td>
                          <td><input type="text" id="txtPrecio" name="tPrecio" <?= isset($Edit)?'value="'.$Pelicula->getPrecio().'"':''?> size="10" class="bg-danger text-white"></td>
                        </tr>
                        <tr>
                          <td align="right"><label for="tClasi">Clasificación:</label</td>
                          <td>
                          <select name="tClasi" id="#clasi" class="bg-danger text-white">
                          <?php
                          
                            
                            
                           
                          foreach($ClasificacionB->getEntradas() as $clas){ 
                            if($clas->getStatus() == 1){?>
                              
                            <option class="bg-danger text-white" value="<?php echo $clas->getID(); ?>"
                              <?php 
                              if(isset($Edit)){
                                if( $clas->getID() == $Pelicula->getIDClasificacion()){
                                  echo 'selected="selected"';
                                }
                              }
                            ?>> <?php echo $clas->getNombre() ?> </option>
                          <?php }
                            } ?>
                          
                          </select>
                                                     
                          </td>
                        </tr>
                        <!--Checkbox-->
                        <tr>
                          <td align="right"><label for="txtGene">Género:</label</td>
                          <td>
                          
                          <?php 
                          
                          
                          $Genero = $GeneroB->getEntradas();
                          if(isset($Edit)){
                            $gen=$GeneroB->getEntradaIDPeli($_GET['edit']);
                            
                            $subgen = $SubGeneroB->getEntradaIDPeli($_GET['edit']);
                          }
                          
                          $cont=0;
                          $contg=0;
                          foreach($Genero as $cat){ 
                            $contdemas=0;
                            $subgenero=$GeneroB->Subgenero($cat->getID());
                            foreach($subgenero as $subcat) {$contdemas++; }
                            $contg++;
                            
                              if($cat->getStatus() == 1) {
                                ?>
                                
                                <div class="dropright d-inline m-3">
                                  
                                  <input 
                                  <?php if(isset($Edit)){
                                          foreach($gen as $result){
                                            if($cat->getID() == $result->getID()){
                                              echo 'checked';
                                            }
                                          } 
                                        }?>
                                  
                                  onclick="unCheck(<?php echo $contg ?>,<?php echo $contdemas ?>)" type="checkbox" id="generos<?php echo $contg ?>" name="tGene[]" value="<?php echo $cat->getID()?>" size="5" class="bg-danger text-white">
                                  
                                  <button class="btn btn-secondary <?php echo ($subgenero)?'dropdown-toggle':''?>  my-3" type="button" id="dropdownMenuButton" <?php echo ($subgenero)?'data-toggle="dropdown"':''?> aria-haspopup="true" aria-expanded="false">
                                  <label class=" text-white" for="generos<?php echo $contg ?>"><?php echo $cat->getNombre() ?></label> 
                                  </button>
                                

                                  <div class="dropdown-menu bg-secondary" aria-labelledby="dropdownMenuButton">
                                  
                                      <?php 
                                      $conts=0;
                                      foreach($subgenero as $subcat) { 
                                        $conts++;
                                        ?>
                                      
                                        <input  
                                        
                                        <?php if(isset($Edit)){
                                          foreach($subgen as $result){
                                            if($subcat->getID() == $result->getID()){
                                              echo 'checked';
                                              
                                            }
                                          } 
                                        }?>
                                        
                                        type="checkbox" onclick="check(<?php echo $contg ?>)" id="subgeneros<?php echo $contg.$conts ?>" name="tSubGene[]" value="<?php echo $subcat->getID() ?>" size="5" class="bg-danger text-white">
                                        <label class="text-white"  for="subgeneros<?php echo $contg.$conts ?>"><?php echo $subcat->getNombre() ?></label>
                                        <br/>
                                      <?php } ?>

                                  </div>
                                </div> 

                                 <?php $cont++; 
                                    if($cont==3){
                                      $cont=0;
                                      echo "<br/>";
                                    }
                            }
                         } 
                         ?>
                          
                          </td>
                          

                        </tr>
                        <tr>
                          <td align="right"><label for="txtAnio">Año:</label></td>
                          <td><input type="text" id="txtAnio" name="tAnio" <?= isset($Edit)?'value="'.$Pelicula->getAnio().'"':''?> size="5" class="bg-danger text-white"></td>
                        </tr>
                        <tr>
                          <td align="right"><label for="txtDirect">Directores:</label></td>
                          <td><input type="text" id="txtDirect" name="tDirect" <?= isset($Edit)?'value="'.$Pelicula->getDirectores().'"':''?> size="50" class="bg-danger text-white"></td>
                        </tr>
                        <tr>
                          <td align="right"><label for="txtActor">Actores:</label></td>
                          <td><input type="text" id="txtActor" name="tActor" <?= isset($Edit)?'value="'.$Pelicula->getActores().'"':''?> size="50" class="bg-danger text-white"></td>
                        </tr>
                        <tr>
                          <td align="right"><label for="txtDur">Duración:</label></td>
                          <td><input type="text" id="txtDur" name="tDur" <?= isset($Edit)?'value="'.$Pelicula->getDuracion().'"':''?> size="7" class="bg-danger text-white"></td>
                        </tr>                                                  
                        <tr>
                          <td align="right"><label for="txtImg">Imagen:</label></td>
                          <td><input type="file" id="txtImg" name="imagen[]" value="Examinar" accept="image/*" class="bg-danger text-white" multiple></td>
                        </tr>
                        <tr>
                          <td align="right"><label for="txtDescripcion">Descripción:</label></td>
                          <td align="left"><textarea id="txtDescripcion" name="tDescripcion" cols="80" rows="5" class="bg-danger text-white"><?= isset($Edit)?$Pelicula->getDescripcion():''?></textarea></td>
                        </tr>                           
                        <tr>
                          <td align="right"><input type="submit"  name="<?= isset($Edit)?'mod':'add'?>" value="Guardar" id="btnSavePeli" class="btn btn-danger"></td>
                          <td align="left"><input type="reset" value="Reset" class="btn btn-danger"> 
                          <input type="button" value="Agregar mas detalles" class=" ml-3 btn btn-info" onclick="agregarFila()"></td>
                          
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

  <script>

        function agregarFila() {
          let rows = document.getElementById('dataTable').getElementsByTagName('tr');
          let rowCount = rows.length;
          let posicion = rowCount - 1;

          let tabla = document.getElementById('dataTable');
          let row = tabla.insertRow(rowCount - 1);
          let cellNombre = row.insertCell(0);
          let cellDetalle = row.insertCell(1);
          let atributo = cellNombre.setAttribute('align','right');
          cellNombre.innerHTML = "<label  for='MasDetalles'>Mas Detalles:</label>";
          cellDetalle.innerHTML = "<input type='text' id='MasDetalles' name='campoDinamico["+posicion+"]['nombre']' size='15' > <input id='MasDetalles' class='bg-danger' type='text'name='campoDinamico["+posicion+"]['detalle']' size='30' >  <input type='button' value='Borrar' onclick='deleteRow(this)' name='campo3'>";
          
        }

        function deleteRow(r) {
          let tabla = document.getElementById('dataTable');
          let index = r.parentNode.parentNode.rowIndex;
          tabla.deleteRow(index);
        }
  
        function check(r){
          let check = document.getElementById('generos'+r);
          check.checked = true;
        }

        function unCheck(r,d){
          let check = document.getElementById('generos'+r);
          let checked = check.checked;
          
          
          if(checked == false){
            for(let i=1; i<=d; i++)
            document.getElementById("subgeneros"+r+i).checked = false;
          } 
          
        }
       
  </script>

</body>

</html>