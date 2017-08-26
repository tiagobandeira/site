
<?php 
	include_once('../template/header.php');
	include_once('nav.php'); 
?>

		<div class="col-6">
			
			<h3>Lista de categorias</h3>
			
			<div class="pannel">
				<div class="pannel-header-line">
					<div class="pannel-header cyan-turque">
						<span>Id</span>
					</div>
					<div class="pannel-header cyan-turque">
						<span>Nome</a>
					</div>
					<div class="pannel-header cyan-turque">
						<span>Opições</span>
					</div>
				</div>
			
			<?php  
				require_once('../model/connect.php');
				$sql = "SELECT nome, idcategoria FROM categoria ORDER BY idcategoria DESC";
				$resulte = $con->query($sql);
				if ($resulte->num_rows > 0) {
					echo "";
					while ($row = $resulte->fetch_assoc()) {
			?>
				<div class="pannel-body-line">
					<div class="pannel-body"><?php echo $row['idcategoria']; ?></div>
					<div class="pannel-body"><?php  echo utf8_encode($row['nome']) ?></div>
					<div class="pannel-body" align="center">
						<span class="glyphicon glyphicon-remove coral"></span>
						<a href="lista_categoria.php?id=<?php echo md5($row['idcategoria']) ?>" style="text-decoration: none;" name="apagar">Apagar</a>
							<span class="glyphicon glyphicon-pencil cyan"></span>
						<a href="up_categoria.php?idcat=<?php echo md5($row['idcategoria']);?>" style="text-decoration: none;">Editar</a>
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
					$resulte = $con->query("SELECT idcategoria FROM categoria");

					while ($row = $resulte->fetch_assoc()) {
						if ($id == md5($row['idcategoria'])) {
							$idcate = $row['idcategoria'];
							$sql = "DELETE FROM categoria WHERE idcategoria = $idcate";
		?>
						<form method="post" action="del_categoria.php">
							deseja realmente apagar este registro<br>
							<input type="submit" name="btn" value="Confirmar"></input>
							<input type="submit" name="btn" value="Cancelar"></input>
							<input type="hidden" name="sql" value="<?php echo $sql?>">
						</form>
		<?php
							
						}
					}
				}
		?>
	</div>
</div>
</div>
<?php  include_once('../template/footer.php'); ?>


