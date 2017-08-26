<?php  include_once('../template/header.php'); ?>
<?php  include_once('nav.php'); ?>
<div class="col-6">
			<form class="pannel" method="post">
				<div class="pannel-header cyan-orange">
					<h3>Nova Categoria</h3>
				</div>
				<div class="pannel-body">
					<span class="pannel-item-title">Nome da categoria:</span>
					<span class="pannel-item-default"><input type="text" name="nome"></span>
					<div style="text-align: center;" class="pannel-item-default">
						<input type="submit" name="" value="Inserir">
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
				require_once('../model/connect.php');
				$sql = 'INSERT INTO categoria (nome) VALUES ("' . $nome . '")';
				$resulte = $con->query($sql);
				if ($resulte === TRUE) {
					echo "Elemento inserido";
				}else{
					echo "Elemento não foi inserido";
				}
			}
		?>
	</div>
</div>
<?php  include_once('../template/footer.php'); ?>