<?php
	require_once('../Business/PeliculaBusiness.php');
	$pB = new PeliculaBusiness($con);


	$cont=0;
    
	foreach ($pB->getDestacados() as $prod) { 
		$cont++;
    ?>
	
		<div class="col-lg-3 <?php if($cont >= 5) {echo "mx-auto"; }?>">
			<!--<h2><a href="#" class="badge badge-secondary">New</a></h2>-->
			<a href="product-details.php?id=<?php echo $prod->getID()?>"><img class="img-fluid" src="images/<?php echo $prod->getID() ?>.jpg" alt=""></a>
		
			<h4><?php echo $prod->getNombre()?></h4>
			<p><strong> $<?php echo $prod->getPrecio() ?> </strong></p>
			<h4><a class="btn btn-warning" href="product-details.php?id=<?php echo $prod->getID()?>" title="add to cart"> Detalles </a></h4>
					<br class="clr">
		</div>

<?php if($cont==6){ break; }
	} ?>