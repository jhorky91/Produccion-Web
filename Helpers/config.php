<?
// datos de conexión

$hostname = 'localhost';
$database = 'produccion';
$username = 'root';
$password = '';
$port = '3306';

try {        
 $con = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
 //print "Conexión exitosa!";
}
catch (PDOException $e) {
   //print "¡Error!: " . $e->getMessage();
   die();
} 
?> 