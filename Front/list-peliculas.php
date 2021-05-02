	<div class="col-12 col-lg-10">
	<?php
	require_once('../Business/PeliculaBusiness.php');
	
	$PeliculaB = new PeliculaBusiness($con);
	?>


		<h3>Listado de Peliculas</h3>

		<div class="row">
		
			<?php foreach($PeliculaB->getEntradas($_GET) as $prod){ ?>
					<div class="col-lg-3">
						<a href="product-details.php?id=<?php echo $prod->getID()?>" class="overlay"></a>
						<a href="product-details.php?id=<?php echo $prod->getID()?>"><center><img class="img-fluid" src="<?php echo 'images/'.$prod->getID().'.jpg' ?>" alt=""></center></a>
							<div class="caption cntr peliculas" align="center">
								<h4><?php echo $prod->getNombre() ?></h4>
								<strong><?php echo $prod->getAnio() ?></strong>
								<p><strong>$<?php echo $prod->getPrecio() ?></strong></p>
						<h4><a class="btn btn-warning" href="product-details.php?id=<?php echo $prod->getID()?>" title="add to cart">Detalles</a></h4>
								<br class="clr">
							</div>
					</div>
			<?php } ?>
		</div>
	
	</div>