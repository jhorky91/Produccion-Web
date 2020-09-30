<?php
            $_REQUEST = array(
                1 => array( 'nombre' => 'Asesino Solitario', 'genero' => 'Accion', 'genero2' => 'Accion','anio' => '2007'
                , 'director' => 'Philip Atwell', 'actores' => 'Jet Li, Jason Statham, John Lone',
                'duracion' => '1h 43min', 'rating' => '9.2', 'clasificacion' => '+18'
                , 'descripcion' => 'Después de que su compañero Tom Lone y su familia son asesinados aparentemente por el infame y esquivo asesino Rogue, el agente del FBI John Crawford se obsesiona con la venganza mientras su mundo se desmorona en un torbellino de culpa y traición.'
                , 'imagen' => 'asesino_solitario.jpg','activo' => false),
                2 => array( 'nombre' => 'Bala Perdida', 'genero' => 'Accion', 'genero2' => 'Accion','anio' => '2020'
                , 'director' => 'Guillaume Pierret', 'actores' => 'Alban Lenoir, Nicolas Duvauchelle, Robert Duvall',
                'duracion' => '1h 33min', 'rating' => '9.0', 'clasificacion' => '+16'
                , 'descripcion' => 'Lino (Alban Lenoir), un mecánico con un don especial para construir coches, ingresa en prisión por un robo que salió mal. Sin embargo, el jefe de una unidad especial de lucha contra las drogas le ofrece un trato para evitar la cárcel: ser mecánico de la policía. Nueve meses más tarde, Lino, que ha demostrado su valía y su reconstrucción personal, es acusado injustamente de asesinato. Ahora, la única prueba que puede demostrar su inocencia es encontrar la bala del crimen alojada en un coche desaparecido.'
                , 'imagen' => 'balaperdida.jpg','activo' => false),
                3 => array( 'nombre' => 'Codigo del Miedo', 'genero' => 'Accion, Crimen, Suspenso','anio' => '2012'
                , 'director' => 'Boaz Yakin', 'actores' => 'Jason Statham, Chris Sarandon, Robert John Burke, James Hong',
                'duracion' => '1h 35min', 'rating' => '9.2', 'clasificacion' => '+18'
                , 'descripcion' => 'Luke Wright (Jason Statham, Los mercenarios) se ha metido en un grave problema con las mafias rusas. Después de haber perdido un combate amañado, los miembros del clan han asesinado a su esposa y lo han condenado a vivir en un exilio social permanente: cualquier persona con la que se relacione, tendrá el mismo destino que su mujer. Desesperado, Luke intentará crear a su alrededor una nueva vida, pero le será imposible, por lo que se convertirá en un vagabundo errático y miserable perdido por las calles neoyorkinas.', 'imagen' => 'codigodel_miedo.jpg','activo' => false),
                4 => array( 'nombre' => 'Capitana Marvel', 'genero' => 'Accion, Fantasia, Ciencia Ficcion','anio' => '2019'
                , 'director' => 'Anna Boden, Ryan Fleck', 'actores' => 'Brie Larson, Samuel L. Jackson, Ben Mendelsohn, Djimon Hounsou',
                'duracion' => '1h 35min', 'rating' => '9.2', 'clasificacion' => '+13'
                , 'descripcion' => 'Ubicada en los 90, Capitana Marvel es una nueva aventura que nos presentará un periodo de la historia nunca antes vista en el MCU, que seguirá el viaje de Carol Danvers para convertirse en una de las heroínas más poderosas del universo. Mientras una guerra galáctica entre dos razas alienígenas llega a la Tierra, Danvers se encuentra a sí misma y a un pequeño grupo de aliados, en el centro del remolino.', 'imagen' => 'capitana_marvel.jpg','activo' => false),
                5 => array( 'nombre' => 'Dragon Invencible', 'genero' => 'Accion, Crimen, Aventura','anio' => '2019'
                , 'director' => 'Fruit Chan', 'actores' => 'Max Zhang, Juju Chan, Anderson Silva, Stephy Tang',
                'duracion' => '1h 25min', 'rating' => '9.2', 'clasificacion' => '+18'
                , 'descripcion' => 'Kowloon (Jin Zhang) es un agente encubierto en Hong Kong que ayuda a la policía a resolver diversos casos misteriosos, consiguiendo así ascender de nivel. Sin embargo, su personalidad impulsiva y su imposibilidad para atrapar a un asesino en serie de policías, han terminado trayéndole serios problemas que han provocado que sea apartado del servicio. Pero tiempo después, el asesino ha vuelto a reaparecer en Macao y Kowloon no dudará en seguir su pista hasta encontrarle.', 'imagen' => 'dragon_invencible.jpg','activo' => false),
                6 => array( 'nombre' => 'Dragon Invencible', 'genero' => 'Accion, Crimen, Aventura','anio' => '2019'
                , 'director' => 'Fruit Chan', 'actores' => 'Max Zhang, Juju Chan, Anderson Silva, Stephy Tang',
                'duracion' => '1h 25min', 'rating' => '9.2', 'clasificacion' => '+18'
                , 'descripcion' => 'Kowloon (Jin Zhang) es un agente encubierto en Hong Kong que ayuda a la policía a resolver diversos casos misteriosos, consiguiendo así ascender de nivel. Sin embargo, su personalidad impulsiva y su imposibilidad para atrapar a un asesino en serie de policías, han terminado trayéndole serios problemas que han provocado que sea apartado del servicio. Pero tiempo después, el asesino ha vuelto a reaparecer en Macao y Kowloon no dudará en seguir su pista hasta encontrarle.', 'imagen' => 'dragon_invencible.jpg','activo' => false),                
            );
        
			?>
            <?php
			foreach($_REQUEST as $acc){
			?>
			
			<li class="span4">
			  <div class="thumbnail">
				<a href="product_details.php" class="overlay"></a>
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Detalles</a>
				<a href="product_details.php"><img src="generos/images/<?php echo $acc['imagen'] ?>" alt=""></a>
				<div class="caption cntr peliculas">
					<p><strong><?php echo $acc['nombre'] ?></strong></p>
					<p><?php echo $acc['genero'] ?> - <?php echo $acc['anio'] ?></p>
					
					<br class="clr">
				</div>
			  </div>
			</li>
			
			<?php
			}
			?>