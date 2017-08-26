<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<?php
		session_start();
		if (isset($_SESSION['user'])) {
			header('location: inicio.php');
		}else{
			include_once('form.php');
		}
	?>
</body>
</html>