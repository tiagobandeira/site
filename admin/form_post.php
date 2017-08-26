<?php  include_once('../template/header.php'); ?>

<?php  include_once('nav.php'); ?>
<div class="col-6">
			<form class="pannel" method="POST" enctype="multipart/form-data">
				<div class="pannel-header cyan-orange">
					<h3>Novo Post</h3>
				</div>
				<div class="pannel-body">
					<span class="pannel-item-title">Título do Post:</span>
					<span class="pannel-item-default"><input type="text" name="titulo"></span>
					<span class="pannel-item-title">
						Escolha uma imagem:
						<!-- MAX_FILE_SIZE deve preceder o campo input no máximo 1MB -->
    					<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
    					<!-- O Nome do elemento input determina o nome da array $_FILES -->
    					<input name="imagem" type="file" /><br/>
    					<h5>
							Obs: O arquivo não de ultrapassar 1000000 Bytes ou 1MB.
    						Tipos suportados: png e jpg.
						</h5>
					</span>
					<span class="pannel-item-title">
						Nome da categoria:
						<select name ="nome" style=" padding: 5px;" >
						<?php  
							require_once('../model/connect.php');
							$sql = "SELECT idcategoria, nome FROM categoria";
							$resulte = $con->query($sql);
							if ($resulte->num_rows > 0) {
								while ($row = $resulte->fetch_assoc()) {
						?>
							<option value="<?php echo utf8_encode($row['idcategoria'])?>" >
								<?php echo utf8_encode($row['nome']); ?>	
							</option>
						<?php  
								}
							}
						?>
						</select>
					</span>
					<span class="pannel-item-title">Texto:</span>
					<span class="pannel-item-default"><textarea name="texto"></textarea></span>
					<div style="text-align: center;" class="pannel-item-default">
						<input type="submit"  value="Post">
						<input type="reset"  value="Reset">
					</div>
				</div>
			</form>
		</div>
</div>
<div class="grid">
	<div class="col-1" align="center">
		<?php  
			if (isset($_POST['titulo'])) {
				$categoria = $_POST['nome'];
				$titulo = $_POST['titulo'];
				$texto = $_POST['texto']; 
				$imagem = $_FILES['imagem']['name'];
				echo "$imagem ";
				
				require_once('../model/connect.php');
				require_once('upload.php');
				if (imageIsEmpty($_FILES['imagem']['name']) === TRUE) {
					$imagem = "default.jpg";
				}
				if (isImage($_FILES['imagem']) === TRUE) {
					echo "é uma imagem. ";
				}
				$sql = "INSERT INTO post (titulo, texto, idcategoria, imagem) VALUES ('$titulo', '$texto', $categoria, '$imagem')";
				$resulte = $con->query($sql);
				if ($resulte === TRUE) {
					moveImage($_FILES['imagem']);
					#header('location: lista_post.php');
					echo " Elemento inserido com sucesso";
				}else{
					echo " Elemento não foi inserido<br>" . $con->error;

				}
			}
			#unset($imagem);
			unset($titulo);
			unset($texto);
		?>
	</div>
</div>
<?php  include_once('../template/footer.php'); ?>