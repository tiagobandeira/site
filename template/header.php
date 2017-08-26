<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style_boot.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	
</head>
<body>
	<?php  
		session_start();
		if (isset($_SESSION['user'])) {
	?>
	<div class="content">
		<nav class="nav nav-title cyan">
			<h2>Minha Conta</h2>
		</nav>
		<nav class="nav nav-menu teal">
			<ul >
				<li class="active-cyan"><strong><a href="<?php echo 'inicio.php'?>">Inicio</a></strong></li>
				<li class=""><strong><a href="../">Minha pagina</a></strong></li>
			</ul>
			<ul  style="float: right;">
				<li class=""><strong><a href="<?php echo '?page=1'?>" ><span  class="glyphicon glyphicon-off"></span></a></strong></li>
				<li class=""><strong><a href="" ><span  class="glyphicon glyphicon-cog"></span></a></strong></li>
			</ul>
		</nav>
	</div>
	<?php  
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
			if($page == 1){
				session_destroy();
				header('location: index.php');
			}else{
					include_once('cms.php');
			}
		}
	?>
	<div class="content ligth">
	<?php  
		}else{
			header('location: index.php');
		}
	?>