<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="css/style_boot.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body >
	<?php include_once('../template/header.php');?>

		<?php
			if (isset($_SESSION['user'])) {
				 
				if (isset( $_GET['page'])) {
					$page = $_GET['page'];
					if($page == 1){
						session_destroy();
						header('location: index.php');
					}
				}else{

					include_once('cms.php');
				}
			}else{
				header('location: index.php');
			}
			
			#sha1 e md5 criptografias 
			#include_once('pannel.php');
			#include_once('list.php');
			#include_once('conteudo.php');
		?>
	</div>
	<footer class="content ligth">
		<div class="grid">
			<div class="col-2">
				<h4 style="" align="center">
					Tiago Bandeira
				</h4>
			</div>
			<div class="col-2">
				<p style="margin: 0;" align="center">
					Templantes Now &copy;
				</p>
			</div>
		</div>
	</footer>
	<script src="css/js/jquery.js"></script>
	<script src="css/js/style_boot.js"></script>
</body>
</html>