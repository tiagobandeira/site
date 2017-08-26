<?php  
	require_once('../model/connect.php');
	if (isset($_POST['btn'])) {
		$btn = $_POST['btn'];
		$sql = $_POST['sql'];

		if ($btn == 'Confirmar') {
			if ($con->query($sql) === TRUE) {
				header('location: lista_categoria.php');
			}else{
				echo "Não foi deletado<br>". $con->error;
			}
		}else{
			header('location: lista_categoria.php');
		}
	}
	
?>