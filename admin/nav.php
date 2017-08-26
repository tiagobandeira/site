<?php  
	if (isset($_SESSION['user'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

		.pannel{
			margin-top: 5px;
		
		}
		#nave .pannel-item-default{
			border-bottom: solid 1px silver;
			color: darkcyan;
			
		}
		.pannel-item{
			color: #444;
		}
	</style>
</head>
<body>
	<div class="grid ">
		<div class="col-3">
			<div class="pannel" id="nave">
				<div class="pannel-header cyan">
					<h3>Menu</h3>
				</div>

				<div class="pannel-body">
					<span href="form_post.php" class="pannel-item-default">
						<span class="glyphicon glyphicon-plus"></span>
						Criar
					</span>
					<a href="form_post.php" class="pannel-item action-blue">Post</a>
					<a href="form_categoria.php" class="pannel-item action-blue">Categoria</a>
				</div>
				<div class="pannel-body">
					<span href="form_post.php" class="pannel-item-default">
						<span class="glyphicon glyphicon-list"></span>
						Listar
					</span>
					<a href="lista_post.php" class="pannel-item action-blue">
						Post
					</a>
					<a href="lista_categoria.php" class="pannel-item action-blue">Categoria</a>
				</div>
			</div>
			
		</div>
<?php  
	}else{
		header('location: index.php');
	}
?>