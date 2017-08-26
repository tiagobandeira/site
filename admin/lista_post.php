<?php  include_once('../template/header.php'); ?>

<?php  include_once('nav.php'); ?>
		
		<div class="col-6">
			<h3>Lista de posts</h3>
			<div class="pannel">
				<div class="pannel-header-line">
					<div class="pannel-header cyan-coral">
						<span>Id</span>
					</div>
					<div class="pannel-header cyan-coral">
						<span>Título</span>
					</div>
					<div class="pannel-header cyan-coral">
						<span>Categoria</span>
					</div>
					<div class="pannel-header cyan-coral">
						<span>Opções</span>
					</div>
				</div>
			
			<?php  
				require_once('../model/connect.php');
				$sql = "SELECT idpost, titulo, idcategoria FROM post ORDER BY idpost DESC";
				$resulte = $con->query($sql);
				if ($resulte->num_rows > 0) {
					echo "";
					while ($row = $resulte->fetch_assoc()) {
			?>
				<div class="pannel-body-line action-blue">
					<div class="pannel-body"><?php echo $row['idpost']; ?></div>
					<div class="pannel-body"><?php  echo utf8_encode($row['titulo']) ?></div>
					<div class="pannel-body"><?php  echo $row['idcategoria']; ?></div>
					<div class="pannel-body" align="center">
						<span class="glyphicon glyphicon-remove coral"></span>
						<a href="lista_post.php?id=<?php echo md5($row['idpost']) ?>" style="text-decoration: none;" name="apagar">Apagar</a>
							<span class="glyphicon glyphicon-pencil cyan"></span>
						<a href="up_post.php?idpo=<?php echo md5($row['idpost'])?>" style="text-decoration: none;">Editar</a>
					</div>
				</div>
			<?php 
					}
					echo "</div>";
				}
		    ?>
		</div>
	</div>

<div class="grid">
	<div class="col-1" align="center">
		<?php  
			//Deletar itens
				if (isset($_GET['id'])) {
					$id = $_GET['id'];
					$resulte = $con->query("SELECT idpost, imagem FROM post");

					while ($row = $resulte->fetch_assoc()) {
						if ($id == md5($row['idpost'])) {
							$idpost = $row['idpost'];
							$imagem = $row['imagem'];
							$sql = "DELETE FROM post WHERE idpost = $idpost";
		?>
						<form method="post" action="del_post.php">
							deseja realmente apagar este registro<br>
							<input type="submit" name="btn" value="Confirmar"></input>
							<input type="submit" name="btn" value="Cancelar"></input>
							<input type="hidden" name="sql" value="<?php echo $sql?>">
							<input type="hidden" name="imagem" value="<?php echo $imagem ?>">
						</form>
		<?php
							
						}
					}
				}
		?>
	</div>
</div>
<?php  include_once('../template/footer.php'); ?>


