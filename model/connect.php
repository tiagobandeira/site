<?php  
	$user = 'root';
	$pass = "";
	$host = '127.0.0.1';
	$bd = 'site';

	$con = new mysqli($host, $user, $pass, $bd);
	if ($con->connect_error) {
		die("Não foi possível conectar ". $con->cennect_error);
	}/*else{
		echo "<h3>Conectado</h3>";
	}*/
?>