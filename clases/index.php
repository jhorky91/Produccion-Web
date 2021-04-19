<?php 
/* error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('PostEntity.php');

$post=new PostEntity('1','10/10/2020','10/10/2021','Mi Primer Post',
'hadfuioghfuiogaeruiogheroghjeriogherioñgherioñghrioghaeriogereuivnaervneruil',
'lalalan','1','asdgh','ag');

echo '<pre>';
var_dump($post);
echo '</pre>';
 */

/* 
$post->setTitulo('Mi Primer Post');
$post->setEntrada('hadfuioghfuiogaeruiogheroghjeriogherioñgherioñghrioghaeriogereuivnaervneruil');
$post->setAutor('lalalan');
$post->setCategoria('1');
$post->setComentarios('asdgh');
$post->setEtiquetas('ag'); 


echo '<br>';
echo $post->getTitulo();
echo '<br>';
echo $post->getEntrada();
echo '<br>';
echo $post->getAutor();
echo '<br>';
echo $post->getCategoria();
echo '<br>';
echo $post->getComentarios();
echo '<br>';
echo $post->getEtiquetas();
 */


//#################################################################################################################################


error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('../nuestraBase/PeliculaGeneroEntity.php');
require_once('../nuestraBase/GeneroEntity.php');
require_once('../nuestraBase/SubGeneroEntity.php');

$post1=new GeneroEntity('13','SI','Accion');
$post2=new SubGeneroEntity('14','SI','Western');
$post3=new PeliculaGeneroEntity('1',$post1->getIDGenero(),$post2->getIDSubGenero(),'10');

echo '<pre>';
var_dump($post3);
echo '</pre>';



?>