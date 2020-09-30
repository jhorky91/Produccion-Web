<?php
            $_REQUEST = array(
                1 => array( 'nombre' => 'Dreamcatcher', 'genero' => 'Drama, Suspenso, Ciencia Ficcion','anio' => '2003'
                , 'director' => 'Lawrence Kasdan', 'actores' => 'Morgan Freeman, Thomas Jane, Jason Lee',
                'duracion' => '2h 16min', 'rating' => '5.5', 'clasificacion' => '+18'
                , 'descripcion' => 'Basada en la obra de Stephen King. Cuatro amigos unidos por telepatía enfrentan a alienígenas en los bosques de Maine.'
                , 'imagen' => 'dreamcatcher.jpg','activo' => false),
                2 => array( 'nombre' => 'Arrival', 'genero' => 'Drama, Suspenso, Ciencia Ficcion','anio' => '2016'
                , 'director' => 'Denis Villeneuve', 'actores' => 'Amy Adams, Jeremy Renner, Forest Whitaker',
                'duracion' => '1h 56min', 'rating' => '7.9', 'clasificacion' => '+13'
                , 'descripcion' => 'El gobierno contrata a la prestigiosa lingüista Louise Banks para que se comunique con unos alienígenas que han llegado a la Tierra. Conforme ella aprende su idioma, va experimentando regresiones muy intensas que desvelan la verdadera misión que les ha llevado hasta nuestro planeta.'
                , 'imagen' => 'arrival.jpg','activo' => false),
                3 => array( 'nombre' => 'The New Mutants', 'genero' => 'Accion, Suspenso, Ciencia Ficcion','anio' => '2020'
                , 'director' => 'Josh Boone', 'actores' => 'Maisie Williams, Anya Taylor-Joy, Charlie Heaton',
                'duracion' => '1h 34min', 'rating' => '5.5', 'clasificacion' => '+13'
                , 'descripcion' => 'Cinco jóvenes mutantes que acaban de descubrir sus habilidades, son encerrados en unas instalaciones secretas contra su voluntad y luchan por escapar de su pasado y salvarse a sí mismos.'
                , 'imagen' => 'the_new_mutants.jpg','activo' => false),
                4 => array( 'nombre' => 'Interstellar', 'genero' => 'Aventura, Drama, Ciencia Ficcion','anio' => '2014'
                , 'director' => 'Christopher Nolan', 'actores' => 'Matthew McConaughey, Anne Hathaway, Jessica Chastain',
                'duracion' => '2h 49min', 'rating' => '8.6', 'clasificacion' => '+13'
                , 'descripcion' => 'Al ver que la vida en la Tierra está llegando a su fin, un grupo de exploradores dirigidos por el piloto Cooper (McConaughey) y la científica Amelia (Hathaway) emprende una misión que puede ser la más importante de la historia de la humanidad: viajar más allá de nuestra galaxia para descubrir algún planeta en otra que pueda garantizar el futuro de la raza humana.'
                , 'imagen' => 'interstellar.jpg','activo' => false),
                5 => array( 'nombre' => 'Inception', 'genero' => 'Accion, Aventura, Ciencia Ficcion','anio' => '2010'
                , 'director' => 'Christopher Nolan', 'actores' => 'Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen Page',
                'duracion' => '2h 28min', 'rating' => '8.8', 'clasificacion' => '+13'
                , 'descripcion' => 'Dom Cobb es un ladrón con una extraña habilidad para entrar a los sueños de la gente y robarles los secretos de sus subconscientes. Su habilidad lo ha vuelto muy popular en el mundo del espionaje corporativo, pero ha tenido un gran costo en la gente que ama. Cobb obtiene la oportunidad de redimirse cuando recibe una tarea imposible: plantar una idea en la mente de una persona. Si tiene éxito, será el crimen perfecto, pero un enemigo se anticipa a sus movimientos.'
                , 'imagen' => 'inception.jpg','activo' => false),
                6 => array( 'nombre' => 'Proyecto Power', 'genero' => 'Accion, Ciencia Ficcion','anio' => '2020'
                , 'director' => 'Henry Joost, Ariel Schulman', 'actores' => 'Jamie Foxx, Joseph Gordon-Levitt, Dominique Fishback',
                'duracion' => '1h 53min', 'rating' => '6.0', 'clasificacion' => '+16'
                , 'descripcion' => 'Un exsoldado se une a un policía para encontrar la fuente detrás de una píldora peligrosa que proporciona superpoderes temporales.'
                , 'imagen' => 'proyecto_power.jpg','activo' => false),
                7 => array( 'nombre' => 'Tenet', 'genero' => 'Accion, Ciencia Ficcion','anio' => '2020'
                , 'director' => 'Christopher Nolan', 'actores' => 'John David Washington, Robert Pattinson, Elizabeth Debicki',
                'duracion' => '2h 30min', 'rating' => '7.8', 'clasificacion' => '+13'
                , 'descripcion' => 'Una acción épica que gira en torno al espionaje internacional, los viajes en el tiempo y la evolución, en la que un agente secreto debe prevenir la Tercera Guerra Mundial.'
                , 'imagen' => 'tenet.jpg','activo' => false),
            );
        
			?>
            <?php
			foreach($_REQUEST as $cienfic){
			?>
			
			<li class="span4">
			  <div class="thumbnail">
				<a href="product_details.php" class="overlay"></a>
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Detalles</a>
				<a href="product_details.php"><img src="generos/images/<?php echo $cienfic['imagen'] ?>" alt=""></a>
				<div class="caption cntr peliculas">
					<p><strong><?php echo $cienfic['nombre'] ?></strong></p>
					<p><?php echo $cienfic['genero'] ?> - <?php echo $cienfic['anio'] ?></p>
					
					<br class="clr">
				</div>
			  </div>
			</li>
			
			<?php
			}
			?>