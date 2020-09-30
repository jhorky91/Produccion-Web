<?php
            $_REQUEST = array(
                1 => array( 'nombre' => 'Despertares', 'genero' => 'Drama', 'genero2' => 'Drama','anio' => '1990'
                , 'director' => 'Penny Marshall', 'actores' => 'Robert De Niro, Robin Williams, Penelope Ann Miller',
                'duracion' => '2h 5min', 'rating' => '9.2', 'clasificacion' => '+18'
                , 'descripcion' => 'El médico Malcolm Sayer, se encuentra con una sala llena de catatónicos víctimas de una epidemia de encefalitis. El doctor se perturba ante esta situación y por el hecho de que muchos son catatónicos desde hace décadas sin esperanza de cualquier cura. Sayer investiga para dar con alguna solución y encuentra una posible cura química y prueba con uno de ellos, Leonard Lowe. Ahora él es adulto después de haber entrado en un estado catatónico en su adolescencia.'
                , 'imagen' => 'despertares.jpg','activo' => false),
                2 => array( 'nombre' => 'Ella es asi', 'genero' => 'Drama', 'genero2' => '','anio' => '1999'
                , 'director' => 'Robert Iscove', 'actores' => 'Freddie Prinze, Jr., Rachael Leigh Cook, Paul Walker',
                'duracion' => '1h 35min', 'rating' => '9.0', 'clasificacion' => '+18'
                , 'descripcion' => 'Zack, el chico más popular del instituto, ha sido abandonado por su novia, una joven siempre dispuesta a trepar socialmente. Tras la afrenta, intenta impedir por todos los medios que ella sea elegida la reina anual del instituto y, para ello, apadrina a otra candidata, a la vez que apuesta con un amigo que una chica anónima puede convertirse en la reina de la fiesta de graduación con el adecuado cambio de imagen. La elegida es la tímida Laney. Mientras se esmera en la mejora del aspecto físico de su pupila, el amor se apodera de él.'
                , 'imagen' => 'ella_es_asi.jpg','activo' => false),
                3 => array( 'nombre' => 'Hombre de Familia', 'genero' => 'Drama','anio' => '2000'
                , 'director' => 'Brett Ratner', 'actores' => 'Nicolas Cage, Téa Leoni, Don Cheadle',
                'duracion' => '2h 5min', 'rating' => '9.2', 'clasificacion' => '+18'
                , 'descripcion' => 'Jack Campbell (Nicolas Cage) es un egocéntrico broker de Wall Street cuya única obsesión es el trabajo y una vida llena de lujo. Un día, tras un incidente en una tienda durante la Nochebuena, se despierta viviendo otra vida alternativa: ahora es un humilde vendedor de neumáticos de Nueva Jersey, casado con su antigua novia Kate (Téa Leoni), a la que había abandonado hace años para no obstaculizar su carrera en el mundo de las finanzas.'
                , 'imagen' => 'hombre_de_familia.jpg','activo' => false),
            );
        
			?>
            <?php
			foreach($_REQUEST as $dra){
			?>
			
			<li class="span4">
			  <div class="thumbnail">
				<a href="product_details.php" class="overlay"></a>
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Detalles</a>
				<a href="product_details.php"><img src="generos/images/<?php echo $dra['imagen'] ?>" alt=""></a>
				<div class="caption cntr peliculas">
					<p><strong><?php echo $dra['nombre'] ?></strong></p>
					<p><?php echo $dra['genero'] ?> - <?php echo $dra['anio'] ?></p>
					
					<br class="clr">
				</div>
			  </div>
			</li>
			
			<?php
			}
			?>