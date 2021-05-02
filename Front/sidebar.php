
         <div class="col-12 col-lg-2  bg-dark text-primary">
		  <div class="col-12">    	
        	<h5>Generos</h5>

								<ul>									
										<?php 
										require_once('../Helpers/config.php');
										require_once('../Business/GeneroBusiness.php');
										$GeneroB = new GeneroBusiness($con);
										
										require_once('../Business/ClasificacionBusiness.php');
										$ClasificacionB = new ClasificacionBusiness($con);

										foreach($GeneroB->getEntradas($_GET) as $cat){ ?>

									<div class="list-group">	
											<li>
												<a class="text-white" href="products.php?genero=<?php echo $cat->getID()?>&subgenero=<?php echo isset($_GET['subgenero'])?$_GET['subgenero']:'' ?>&clasificacion=<?php echo isset($_GET['clasificacion'])?$_GET['clasificacion']:'' ?>">
													<span class="oi oi-chevron-right"></span>
													<?php echo $cat->getNombre()?>
												</a>

											</li>
									</div>
										<?php } ?>
										
											<li>
												<a class="text-white" href="products.php?genero=&subgenero=<?php echo isset($_GET['subgenero'])?$_GET['subgenero']:'' ?>&clasificacion=<?php echo isset($_GET['clasificacion'])?$_GET['clasificacion']:'' ?>">
													<span class="icon-chevron-right"></span>
												Todos
												</a>
											</li>
								</ul>
							 
		</div>
		
		<div class="col-12 col-lg-2 ">	
      	<h5>SubGeneros</h5>

								<ul>									
										<?php 
										require_once('../Business/SubGeneroBusiness.php');
										$SubGeneroB = new SubGeneroBusiness($con);
										
										

										foreach($SubGeneroB->getEntradas() as $subcat){ ?>

									<div class="list-group">	
											<li>
												<a class="text-white" href="products.php?genero=<?php echo isset($_GET['genero'])?$_GET['genero']:'' ?>&subgenero=<?php echo $subcat->getID()?>&clasificacion=<?php echo isset($_GET['clasificacion'])?$_GET['clasificacion']:'' ?>">
													<span class="oi oi-chevron-right"></span>
													<?php echo $subcat->getNombre()?>
												</a>

											</li>
									</div>
										<?php } ?>
										
											<li>
												<a class="text-white" href="products.php?genero=<?php echo isset($_GET['genero'])?$_GET['genero']:'' ?>&subgenero=&clasificacion=<?php echo isset($_GET['clasificacion'])?$_GET['clasificacion']:'' ?>">
													<span class="icon-chevron-right"></span>
												Todos
												</a>
											</li>
								</ul>
							 
		</div>
    <div class="col-12 col-lg-2 ">
      <h5>Clasificacion por edades</h5>

								<ul> 
										<?php 
											
													
											foreach($ClasificacionB->getEntradas($_GET) as $mar){ ?>
									<div class="list-group">												
											<li>
													<a class="text-white" href="products.php?genero=<?php echo isset($_GET['genero'])?$_GET['genero']:'' ?>&subgenero=<?php echo isset($_GET['subgenero'])?$_GET['subgenero']:'' ?>&clasificacion=<?php echo $mar->getID()?>">
														<span class="oi oi-chevron-right"></span>
														<?php echo $mar->getNombre()?></a>
											</li>
									</div>
										<?php }?>
											<li>
												<a class="text-white" href="products.php?genero=<?php echo isset($_GET['genero'])?$_GET['genero']:'' ?>&subgenero=<?php echo isset($_GET['subgenero'])?$_GET['subgenero']:'' ?>&clasificacion=">
													<span class="icon-chevron-right"></span>
												Todos
													</a>
											</li>
								</ul>							
							
	  </div>
	  <div class="col-12 col-lg-2 ">	
      	<h5>Ordenado</h5>
								<ul>									
									<div class="list-group">	
											<li>
												<a class="text-white" href="products.php?
												genero=<?php echo isset($_GET['genero'])?$_GET['genero']:'' ?>
												&subgenero=<?php echo isset($_GET['subgenero'])?$_GET['subgenero']:'' ?>
												&clasificacion=<?php echo isset($_GET['clasificacion'])?$_GET['clasificacion']:'' ?>
												&orden=1">
													<span class="oi oi-chevron-right"></span>
													Nombre Ascendente
												</a>

											</li>
									</div>
									<div class="list-group">	
											<li>
												<a class="text-white" href="products.php?
												genero=<?php echo isset($_GET['genero'])?$_GET['genero']:'' ?>
												&subgenero=<?php echo isset($_GET['subgenero'])?$_GET['subgenero']:'' ?>
												&clasificacion=<?php echo isset($_GET['clasificacion'])?$_GET['clasificacion']:'' ?>
												&orden=2">
													<span class="oi oi-chevron-right"></span>
													Nombre Descendente
												</a>

											</li>
									</div>
									<div class="list-group">	
											<li>
												<a class="text-white" href="products.php?
												genero=<?php echo isset($_GET['genero'])?$_GET['genero']:'' ?>
												&subgenero=<?php echo isset($_GET['subgenero'])?$_GET['subgenero']:'' ?>
												&clasificacion=<?php echo isset($_GET['clasificacion'])?$_GET['clasificacion']:'' ?>
												&orden=3">
													<span class="oi oi-chevron-right"></span>
													Año Ascendente
												</a>

											</li>
									</div>
									<div class="list-group">	
											<li>
												<a class="text-white" href="products.php?
												genero=<?php echo isset($_GET['genero'])?$_GET['genero']:'' ?>
												&subgenero=<?php echo isset($_GET['subgenero'])?$_GET['subgenero']:'' ?>
												&clasificacion=<?php echo isset($_GET['clasificacion'])?$_GET['clasificacion']:'' ?>
												&orden=4">
													<span class="oi oi-chevron-right"></span>
													Año Descendente
												</a>

											</li>
									</div>

								</ul>
							 
		</div>
    </div>     