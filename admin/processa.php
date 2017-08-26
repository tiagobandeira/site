<?php
	session_start();  
	#Se tiver dados enviados de post.php, os recebe e armazena seus valores.
	if (isset($_POST['usu'])) {
			$usu = $_POST['usu'];
			$senha = $_POST['senha'];
	}
	#Compara os valores passados de post com os dados do usuário.
	#Se os valores forem iguais, cria uma sessão para o usuário e exclui a sessão de erro se, e somente se, ela existir.
	if ($usu == 'admin' && $senha == 123) {
		$_SESSION['user'] = 'admin';
		unset($_SESSION['erro']);
		header('Location: inicio.php');
	#Se não, cria-se uma sessão de erro e é excluida a sessão de usuário se, e somente se, a mesma existit.
	}else{
		$_SESSION['erro'] = 'erro';
		unset($_SESSION['user']);
		header('Location: index.php');
	}
?>