<?php  include_once('../template/header.php'); ?>

<?php  include_once('nav.php'); ?>
<div class="col-6">
			<?php  
				require_once('../model/connect.php');
				if (isset($_GET['idpo'])) {
					$id = $_GET['idpo'];
				}

				$resulte = $con->query("SELECT p.idpost, p.titulo, p.texto, p.imagem,  c.nome, c.idcategoria 
					FROM post AS p, categoria AS c WHERE p.idcategoria = c.idcategoria");
				while ($row = $resulte->fetch_assoc()) {
					if ($id == md5($row['idpost'])) {
						$idA = $row['idpost'];
						$tituloA = $row['titulo'];
						$textoA = $row['texto'];
						$imagemA = $row['imagem'];
						$categoriaA = $row['nome'];
						$idcategoriaA = $row['idcategoria'];
						
					}

				}
			?>
			<form class="pannel" method="POST" enctype="multipart/form-data">
				<div class="pannel-header cyan-orange">
					<h3>Editar Post</h3>
				</div>
				<div class="pannel-body">
					<span class="pannel-item-title">Título do Post:</span>
					<span class="pannel-item-default"><input type="text" name="titulo" value="<?php echo $tituloA ?>"></span>
					<span class="pannel-item-title">Imagem atual: <a href="../midia/<?php echo $imagemA?>"><?php echo $imagemA?></a></span>
					<span class="pannel-item-title">
						Escolha uma nova imagem:
						<!-- MAX_FILE_SIZE deve preceder o campo input no máximo 1MB -->
    					<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
    					<!-- O Nome do elemento input determina o nome da array $_FILES -->
    					<input name="imagem" type="file" /><br/>
    					<h5>
							Obs: O arquivo não deve ultrapassar 1000000 Bytes ou 1MB.
    						Tipos suportados: png e jpg.
						</h5>
					</span>
					<span class="pannel-item-title">
						Mudar a categoria:
						<select name ="nome" style=" padding: 5px;" >
							<option   value="<?php echo $idcategoriaA; ?>	">
								<?php echo $categoriaA; ?>	
							</option>
						<?php 
							require_once('../model/connect.php');
							$sql = "SELECT idcategoria, nome FROM categoria";
							$resulte = $con->query($sql);
							if ($resulte->num_rows > 0) {
								while ($row = $resulte->fetch_assoc()) {
						?>
							<option value="<?php echo $row['idcategoria']?>">
								<?php echo utf8_encode($row['nome']); ?>
							</option>
						<?php  
								}
							}
						?>
						</select>
					</span>
					<span class="pannel-item-title">Texto:</span>
					<span class="pannel-item-default"><textarea name="texto"><?php echo $textoA; ?></textarea></span>
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
				
				require_once('../model/connect.php');
				require_once('upload.php');
				if (imageIsEmpty($_FILES['imagem']['name']) === TRUE) {
					//não foi selecionada nenhuma imagem
					#$imagem = "default.jpg";
					#echo "Sem imagens selecionadas";
					$sql = "UPDATE post 
					SET titulo = '$titulo', texto = '$texto', idcategoria = '$categoria' WHERE idpost = '$idA'";
				}else{
					$sql = "UPDATE post 
					SET titulo = '$titulo', texto = '$texto', imagem = '$imagem', idcategoria = '$categoria' WHERE idpost = '$idA'";
					//apaga a imagem antiga
					$unlinkfile = '../midia/' . $imagemA;
					unlink($unlinkfile);
				}
				if (isImage($_FILES['imagem']) === TRUE) {
					echo "é uma imagem. ";
				}
			
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
			#unset($titulo);
			#unset($texto);
		?>
	</div>
</div>
<?php  include_once('../template/footer.php'); ?>
