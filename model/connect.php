<?php  
	$user = "u599766642_tiago";
	$pass = "bS9EgRmy8q1r";
	$host = "127.0.0.1";
	$bd = "u599766642_site";

	$con = new mysqli($host, $user, $pass, $bd);
	if ($con->connect_error) {
		die("Não foi possível conectar ". $con->cennect_error);
	}/*else{
		echo "<h3>Conectado</h3>";
	}*/
?>
