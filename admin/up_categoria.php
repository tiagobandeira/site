<?php  include_once('../template/header.php'); ?>
<?php  include_once('nav.php'); ?>
<div class="col-6">
			<?php  
				require_once('../model/connect.php');
				if (isset($_GET['idcat'])) {
					$id = $_GET['idcat'];
				}
				$resulte = $con->query("SELECT idcategoria, nome FROM categoria");
				while ($row = $resulte->fetch_assoc()) {
					if ($id == md5($row['idcategoria'])) {
						$nomecat = $row['nome'];
						$idcat = $row['idcategoria'];
					}
				}
			?>
			<form class="pannel" method="post" >
				<div class="pannel-header cyan-orange">
					<h3>Editar Categoria</h3>
				</div>
				<div class="pannel-body">
					<span class="pannel-item-title">Nome da categoria:</span>
					<span class="pannel-item-default"><input type="text" name="nome" value="<?php echo $nomecat?>"></span>
					<div style="text-align: center;" class="pannel-item-default">
						<input type="submit" name="" value="Atualizar">
						<input type="reset" name="" value="Limpar">
					</div>
				</div>
			</form>
</div>
		
</div>
<div class="grid">
	<div class="col-1" align="center">
		<?php 
			if(isset($_POST['nome'])){
				$nome = $_POST['nome'];
				$sql = "UPDATE categoria SET nome = '$nome' WHERE idcategoria = $idcat";
				$resulte = $con->query($sql);
				if ($resulte === TRUE) {
					echo "Elemento Atualizado";
				}else{
					echo "Elemento não foi atualizado";
				}
			}

		?>
	</div>
</div>
<?php  include_once('../template/footer.php'); ?>