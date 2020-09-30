<?php
            $_REQUEST = array(
                1 => array( 'nombre' => 'Doctor Sleep', 'genero' => 'Drama, Suspenso, Fantasia','anio' => '2019'
                , 'director' => 'Mike Flanagan', 'actores' => 'Ewan McGregor, Rebecca Ferguson, Kyliegh Curran',
                'duracion' => '2h 32min', 'rating' => '7.4', 'clasificacion' => '+16'
                , 'descripcion' => 'Dan, alcohólico y traumatizado por lo que le pasó siendo un niño en el hotel Overlook, conoce a Abra, una adolescente que posee el mismo don que él. Dan tratará de salvar a Abra de un grupo de siniestros personajes que ansían la inmortalidad y aspiran alcanzarla alimentándose de los poderes psíquicos de gente como ellos.'
                , 'imagen' => 'doctor_sleep.jpg','activo' => false),
                2 => array( 'nombre' => 'Harry Potter and the Sorcerers Stone', 'genero' => 'Aventura, Fantasia','anio' => '2001'
                , 'director' => 'Chris Columbus', 'actores' => 'Daniel Radcliffe, Rupert Grint, Richard Harris',
                'duracion' => '2h 32min', 'rating' => '7.6', 'clasificacion' => 'ATP'
                , 'descripcion' => 'El día de su cumpleaños, Harry Potter descubre que es hijo de dos conocidos hechiceros, de los que ha heredado poderes mágicos. Debe asistir a una famosa escuela de magia y hechicería, donde entabla una amistad con dos jóvenes que se convertirán en sus compañeros de aventura. Durante su primer año en Hogwarts, descubre que un malévolo y poderoso mago llamado Voldemort está en busca de una piedra filosofal que alarga la vida de quien la posee.'
                , 'imagen' => 'harry_potter_and_the_sorcerers_stone.jpg','activo' => false),
                3 => array( 'nombre' => 'Pirates of the Caribbean: The Curse of the Black Pearl', 'genero' => 'Accion, Aventura, Fantasia','anio' => '2003'
                , 'director' => 'Gore Verbinski', 'actores' => 'Johnny Depp, Geoffrey Rush, Orlando Bloom',
                'duracion' => '2h 23min', 'rating' => '8.0', 'clasificacion' => 'ATP'
                , 'descripcion' => 'El capitán Barbossa le roba el barco al pirata Jack Sparrow y secuestra a Elizabeth, amiga de Will Turner. Barbossa y su tripulación son víctimas de un conjuro que los condena a vivir eternamente y a transformarse cada noche en esqueletos vivientes.'
                , 'imagen' => 'pirates_of_the_caribbean_the_curse_of_the_black_pearl.jpg','activo' => false),
                4 => array( 'nombre' => 'Justice League', 'genero' => 'Accion, Aventura, Fantasia','anio' => '2017'
                , 'director' => 'Zack Snyder', 'actores' => 'Ben Affleck, Gal Gadot, Jason Momoa',
                'duracion' => '2h', 'rating' => '6.3', 'clasificacion' => 'ATP'
                , 'descripcion' => 'Gracias a su renovada fe en la humanidad e inspirado por el acto de altruísmo de Superman, Bruce Wayne pide ayuda a su nueva aliada, Diana Prince, para enfrentar a un enemigo aún más peligroso.'
                , 'imagen' => 'justice_league.jpg','activo' => false),
                5 => array( 'nombre' => 'The Lord of the Rings: The Fellowship of the Ring', 'genero' => 'Accion, Aventura, Fantasia, Drama','anio' => '2001'
                , 'director' => 'Peter Jackson', 'actores' => 'Elijah Wood, Ian McKellen, Orlando Bloom',
                'duracion' => '2h 58min', 'rating' => '8.8', 'clasificacion' => '+13'
                , 'descripcion' => 'Frodo Bolsón es un hobbit al que su tío Bilbo hace portador del poderoso Anillo Único, capaz de otorgar un poder ilimitado al que la posea, con la finalidad de destruirlo. Sin embargo, fuerzas malignas muy poderosas quieren arrebatárselo.'
                , 'imagen' => 'the_lord_of_the_rings_the_fellowship_of_the_ring.jpg','activo' => false),
                6 => array( 'nombre' => 'Avatar', 'genero' => 'Accion, Aventura, Fantasia','anio' => '2009'
                , 'director' => 'James Cameron', 'actores' => 'Sam Worthington, Zoe Saldana, Sigourney Weaver',
                'duracion' => '2h 42min', 'rating' => '7.8', 'clasificacion' => 'ATP'
                , 'descripcion' => 'En un exuberante planeta llamado Pandora viven los Navi, seres que aparentan ser primitivos pero que en realidad son muy evolucionados. Debido a que el ambiente de Pandora es venenoso, los híbridos humanos/Navi, llamados Avatares, están relacionados con las mentes humanas, lo que les permite moverse libremente por Pandora. Jake Sully, un exinfante de marina paralítico se transforma a través de un Avatar, y se enamora de una mujer Navi.'
                , 'imagen' => 'avatar.jpg','activo' => false),
                7 => array( 'nombre' => 'The Mummy', 'genero' => 'Accion, Aventura, Fantasia','anio' => '1999'
                , 'director' => 'Stephen Sommers', 'actores' => 'Rachel Weisz, John Hannah, Arnold Vosloo',
                'duracion' => '2h 5min', 'rating' => '6.2', 'clasificacion' => '+13'
                , 'descripcion' => 'Durante una batalla en Egipto, el legionario Rick O Connell y un compañero descubren las ruinas de Hamunaptra, la ciudad de los muertos. Algún tiempo después vuelven al mismo lugar con una egiptóloga y su hermano. Allí coinciden con un grupo de estadounidenses, deseosos de correr aventuras, que acabarán provocando la resurrección de la momia de un diabólico sacerdote egipcio que intenta desesperadamente recuperar a su amada.'
                , 'imagen' => 'the_mummy.jpg','activo' => false),
                8 => array( 'nombre' => 'Toy Story', 'genero' => 'Animacion, Fantasia, Comedia, Infantil','anio' => '1995'
                , 'director' => 'John Lasseter', 'actores' => 'Tom Hanks, Tim Allen, Don Rickles.',
                'duracion' => '1h 20min', 'rating' => '7.7', 'clasificacion' => 'ATP'
                , 'descripcion' => 'Los juguetes de Andy, un niño de 6 años, temen que haya llegado su hora y que un nuevo regalo de cumpleaños les sustituya en el corazón de su dueño. Woody, un vaquero que ha sido hasta ahora el juguete favorito de Andy, trata de tranquilizarlos hasta que aparece Buzz Lightyear, un héroe espacial dotado de todo tipo de avances tecnológicos. Woody es relegado a un segundo plano. Su constante rivalidad se transformará en una gran amistad cuando ambos se pierden en la ciudad sin saber cómo volver a casa.'
                , 'imagen' => 'toy_story.jpg','activo' => false),
                9 => array( 'nombre' => 'Shrek', 'genero' => ' Animacion, Comedia, Fantasia, Aventura, Infantil','anio' => '2001'
                , 'director' => 'Andrew Adamson', 'actores' => 'Mike Myers, Eddie Murphy, Cameron Diaz',
                'duracion' => '1h 27min', 'rating' => '7.7', 'clasificacion' => 'ATP'
                , 'descripcion' => 'Hace mucho tiempo, en una lejanísima ciénaga, vivía un feroz ogro llamado Shrek. De repente, un día, su soledad se ve interrumpida por una invasión de sorprendentes personajes. Hay ratoncitos ciegos en su comida, un enorme y malísimo lobo en su cama, tres cerditos sin hogar y otros seres que han sido deportados de su tierra por el malvado Lord Farquaad. Para salvar su territorio, Shrek hace un pacto con Farquaad y emprende viaje para conseguir que la bella princesa Fiona acceda a ser la novia del Lord. En tan importante misión le acompaña un divertido burro, dispuesto a hacer cualquier cosa por Shrek: todo, menos guardar silencio.'
                , 'imagen' => 'shrek.jpg','activo' => false),
            );
        
			?>
            <?php
			foreach($_REQUEST as $fan){
			?>
			
			<li class="span4">
			  <div class="thumbnail">
				<a href="product_details.php" class="overlay"></a>
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Detalles</a>
				<a href="product_details.php"><img src="generos/images/<?php echo $fan['imagen'] ?>" alt=""></a>
				<div class="caption cntr peliculas">
					<p><strong><?php echo $fan['nombre'] ?></strong></p>
					<p><?php echo $fan['genero'] ?> - <?php echo $fan['anio'] ?></p>
					
					<br class="clr">
				</div>
			  </div>
			</li>
			
			<?php
			}
			?>