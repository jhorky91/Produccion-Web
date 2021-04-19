<?php
include('header.php'); 
include_once('../Helpers/funcs.php');

//Devuelve el contenido de la tabla Usuarios    

$usuarios = "SELECT id_usuario,status,nombre,apellido,fecha,fecha_nac,usuario,email,telefono,pedidos,dinero_gastado FROM usuario";
$resultado = $con->query($usuarios);

if(isset($_GET['del'])){

    $deleteCom = "DELETE FROM comentario WHERE id_usuario=".$_GET['del'];
    $count = $con->exec($deleteCom);

    $selectDir = "SELECT id_direccion FROM direccion
    INNER JOIN usuario_direccion on direccion.id_direccion=usuario_direccion.id_direccion
    WHERE id_usuario=".$_GET['del'];
    $dir = $con->query($selectDir);

    $deleteDir = "DELETE FROM usuario_direccion WHERE id_usuario=".$_GET['del'];
    $count = $con->exec($deleteDir);

    foreach($dir as $d){
      $deleteDir = "DELETE FROM direccion WHERE id_direccion=".$d['id_direccion'];
      $count = $con->exec($deleteDir);
    }

    $deleteUser = "DELETE FROM usuario WHERE id_usuario=".$_GET['del'];
    $count = $con->exec($deleteUser);

    unset($_GET['del']);
    redirect('user.php');
}

?>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
   <div class="container-fluid">

          <!-- DataTales Example -->

<!-- CLIENTES---------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<div class="container-fluid">
       <h1 class="h3 mb-2 text-gray-800">Gestionar Clientes</h1>
          <div class="card shadow mb-4">
            <div class="card-header py-1">
              <span class="m-0 font-weight-bold text-primary">Todo()</span>
              <span class="m-0 font-weight-bold text-primary">|</span>
              <span class="m-0 font-weight-bold text-primary">Publicado()</span>
              <span class="m-0 font-weight-bold text-primary">|</span>
              <span class="m-0 font-weight-bold text-primary">Borrador()</span>
              <span class="m-0 font-weight-bold text-primary">|</span>
              <span class="m-0 font-weight-bold text-primary">Pendiente()</span>
              <a href="new-user.php"><input class="btn btn-danger" type="submit" value="Añadir Cliente"></a>
              <input class="btn btn-danger" type="submit" value="Imprimir">
              <input class="btn btn-danger" type="submit" value="PDF">
              <input class="btn btn-danger" type="submit" value="CSV">
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-xl-responsive-borderless" id="tablajson" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                    <tr align="center">
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Fecha de nacimiento</th>
                      <th>Usuario</th>
                      <th>Email</th>
                      <th>Direccion</th>
                      <th>Telefono</th>
                      <th>Pedidos</th>
                      <th>Dinero Gastado</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php


                  foreach($resultado as $us){ ?>
                  <?php
                  
                  $direccion = "SELECT calle,altura,piso,dpto,barrio FROM direccion
                  INNER JOIN usuario_direccion on direccion.id_direccion =usuario_direccion.id_direccion 
                  WHERE id_usuario=".$us['id_usuario'];
                  $resul = $con->query($direccion);
                    ?>

                    <tr align="center">
                      <td><?php echo $us['id_usuario']; ?></td>
                      <td><?php echo $us['nombre'] ?></td>
                      <td><?php echo $us['apellido'] ?></td>
                      <td><?php echo $us['fecha_nac']; ?></td>
                      <td><?php echo $us['usuario'] ?></td>
                      <td><?php echo $us['email']; ?></td>
                      <td>
                      <?php foreach ($resul as $dir) { ?>
                     
                     
                      <?php echo $dir['calle'].' '.
                                     $dir['altura'].' '.
                                     $dir['piso'].'º'.
                                     $dir['dpto'].' '.
                                     $dir['barrio']; ?>
                      <?php } ?>
                      </td>
                      <td><?php echo $us['telefono']; ?></td>
                      <td><?php echo $us['pedidos']; ?></td>
                      <td><?php echo $us['dinero_gastado']; ?></td>

                      <td><center>
                      <a href="edit-user.php?edit=<?php echo $us['id_usuario'];?>"><i class="fas fa-edit"></a></i>&nbsp;&nbsp;
                      <a href="user.php?del=<?php echo $us['id_usuario'];?>"><i class="fas fa-trash-alt"></i></a></i></center>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
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
