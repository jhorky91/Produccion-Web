<?php
include_once('header.php');

require_once('../Business/ComentarioBusiness.php');
$comentsB = new ComentarioBusiness($con);


    if(isset($_POST['add'])){
		
        
		$datos = array('id_usuario'=>$_SESSION['id'], 'rating'=>$_POST['tRating'],
		 'titulo'=> $_POST['tTitle'], 'comentario'=>$_POST['tComentario'],'id_pelicula'=> $_GET['id']);
		 
		 $comentsB->getAdd($datos);
  

        redirect('product-details.php?id='.$_GET['id'] );
	}
	
?>

<div class="container-fluid">
    <div class="row">
        <?php include('sidebar.php');?>


        <!-- Detalle del producto -->
        <div class="col-12 col-lg-10">
            <h3>Listado de Peliculas</h3>
            <div class="row">

                <?php
				
					require_once('../Business/PeliculaBusiness.php');
					$peliB = new PeliculaBusiness($con);
					$b = $peliB->getEntrada($_GET['id']);
					
				?>
                <div class="col-10">

                    <div>
                        <div class="row">
                            <div class="col-5">

                                <img class="img-fluid" src="
				  <?php 
					echo 'images/'.$b->getID().'.jpg';
                          ?>
				  
				  " alt="">
                            </div>
                            <div class="col-7">
                                <h3><?php echo $b->getNombre()?></h3>
                                <!--<hr class="soft"/>-->


                                <p class="text-dark"><strong>Genero:</strong>
                                    <?php 
                          require_once('../Business/GeneroBusiness.php');
						  $genB = new GeneroBusiness($con);
							
						  $g=$genB->getEntradaIDPeli($b->getID());

						  require_once('../Business/SubGeneroBusiness.php');
						  $SubgenB = new SubGeneroBusiness($con);
							
						  $sg=$SubgenB->getEntradaIDPeli($b->getID());

						  foreach($g as $gene){
							echo $gene->getNombre().' ';
						  }

						  foreach($sg as $Subgene){
							echo $Subgene->getNombre().' ';
						  }

                        
                          

                      ?>
                                </p>
                                <br>
                                <p class="text-dark"> <strong>Precio:</strong> $<?php echo $b->getPrecio()?></p>
                                <br>
                                <p class="text-dark"><strong>Clasificacion por edades:</strong> <?php echo $b->getIDClasificacion()?></p>
                                <br>
                                <p class="text-dark"><strong>Año:</strong> <?php echo $b->getAnio()?></p>
								<input class="btn btn-warning w-25 font-weight-bold"  type="submit" name="addCart" value="ADD TO CART">

                            </div>
                        </div>
                        <?php
						require_once('../Business/ComentarioBusiness.php');
						$comentarioB = new ComentarioBusiness($con);
						$c=$comentarioB->getRating($b->getID());
						 ?>

                        <ul class="nav nav-pills pt-3">
                              <li><a class="btn btn-primary" data-toggle="tab" href="#home">Detalle</a></li>
                        </ul>
                        <div class="tab-content bg-transparent" style="padding:20px;">
                              	<div id="home" class="tab-pane fade-show justify-content-center">
									<table class="table table-xl-responsive-borderless" width="100%" cellspacing="0">
						  				<tr>
										    <td><div class="row"><h4><b class="badge badge-danger">Directores:</b></h4></td>
											<td class="mx-auto"><div class="col"><?php echo $b->getDirectores()?></div></td>
											</div>											
										</tr>
											
										<tr>	
										    <td><div class="row"><h4><b class="badge badge-danger">Actores:</b></h4></td>
											<td><div class="col"><?php echo $b->getActores()?></div></td>
											</div>
										</tr>	
											<td><div class="row"><h4><b class="badge badge-danger">Duracion:</b></h4></td>
											<td><div class="col"><?php echo $b->getDuracion()?></div></td>
											</div>
										</tr>
										<tr>	
										    <td><div class="row"><h4><b class="badge badge-danger">Descripcion:</b></h4></td>
											<td><div class="col"><?php echo $b->getDescripcion()?></div></td>
											</div>
										</tr>
										<tr>
										    <td><div class="row"><h4><b class="badge badge-danger">Rating:</b></h4></td>
											<td><div class="col"><?php echo $c->getRating()?></div></td>
											</div>								
										</tr>

									</table>
							   </div>
                        </div>



                    </div>

                </div>


            </div> <!-- Body wrapper -->

            


				<div class="col-md-10 mx-auto">
					<div class="d-flex justify-content-center"><h4 class="mb-3">Comentarios</h4></div>

						  <?php 
						  
						  //$comentsB-> getEntradaIDPeli($b->getID()); 

						  foreach($comentsB->getEntradaIDPeli($b->getID()) as $comen){
							require_once('../Business/UserBusiness.php');
							$UserB = new UserBusiness($con);
							$User = $UserB->getEntrada($comen->getIDUsuario());
						  ?>

					<div class="container-fluid border rounded border-dark mb-3" style="box-shadow: inset 0 0 10px; word-wrap: break-word;">

									
				            <div class="box box-b box-block my-4">

				              <div class="box-comment-info d-flex justify-content-between">
				                <div class="d-flex">
				                <!--<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="Howard Thomas Avatar"
									 class="rounded-circle z-depth-0 mr-3" alt="avatar image" height="50">-->
									 <i class="fas fa-user-circle mr-2" style="font-size: 40px;"></i> 
				                <div>

					                  <div class="box-comment-author">
					                    <b><?php echo $User->getNombre().' '.$User->getApellido();?></b>
					                  </div>
					                  <div>
									  <?php echo $comen->getFecha();?>
					                  </div>
					                </div>
				                </div>
				                <div class="mr-5"><b>Rating:</b> <?php echo $comen->getRating();?></div>
				              </div>
							  <div class="mt-4"><b>Titulo:</b>				              	
							  	<?php echo $comen->getTitulo();?>
				              </div>
				              <div class="mt-4"><b>Comentario:</b>		              	
							  	<?php echo $comen->getComentario();?>
				              </div>

							</div>
							
				    </div>

					<?php }?>
				</div>

		<div class="container-fluid">

                    <div class="row py-4">
        <div class="col-md-6 mx-auto">

		<?php
		if(isset($_SESSION['usuario_logueado'])){ ?>

          <form method="POST" action="">
            <div class="form-group">
                <div class="d-flex justify-content-center"><h4 class="mb-3">Escribe tu comentario</h4></div>

           	</div>
		
            <div class="form-group">
              <!--<input type="text" name="rating" class="form-control form-control-lg"
                     id="example-input-rating"
					 placeholder="Rating 1-5">-->


					 <label for="txtRating"><b>Rating:</b> </label>
					 <select name="tRating" id="txtRating" class="bg-danger text-white">
							 
						 <option value="1">Calificacion - 1</option>					 
						 <option value="2">Calificacion - 2</option>
						 <option value="3">Calificacion - 3</option>
						 <option value="4">Calificacion - 4</option>
						 <option value="5">Calificacion - 5</option>
					 </select>	 
            </div>
			<div class="form-group">
			<input type="text" placeholder="Titulo" class="form-control" name="tTitle" >
			</div>
            <div class="form-group">
              	<textarea placeholder="Escribe tu comentario..."
                        class="form-control"
                        id="example-textarea" name="tComentario" rows="7"></textarea>
            </div>

                                <div class="text-right">
                                    <a href="#" class="btn btn-danger">
                                        <span>Reset</span>
                                    </a>
                                    <!--<a href="#" class="btn btn-success">
										<span>Enviar</span>-->
									<input class="btn btn-success" type="submit" name="add" value="Enviar">	
                                        
                                    </a>
                                </div>

		  </form>
		  <?php } ?>
        </div>
      </div>
</div>

        </div>
        
        
        
    </div>
</div>









    <?php
include('footer.php');
?>