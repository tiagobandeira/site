<?php  
	require_once('../model/connect.php');
	if (isset($_POST['btn'])) {
		$btn = $_POST['btn'];
		$sql = $_POST['sql'];
		$imagem = $_POST['imagem'];
		$unlinkfile = '../midia/' . $imagem;

		if ($btn == 'Confirmar') {
			if ($con->query($sql) === TRUE) {
				unlink($unlinkfile);
				header('location: lista_post.php');
			}else{
				echo "Não foi deletado<br>". $con->error;
			}
		}else{
			header('location: lista_post.php');
		}
	}
	
?>