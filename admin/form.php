<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style_boot.css">
</head>
<body>
	<?php  
		# A sessão está em index.php
	?>
	<form method="POST" action="processa.php">
		<div class="content" style="margin-top: 50px;">
			<div class="grid">
				<div class="col-3">
					<div class="pannel">
						<div class="pannel-header cyan">
							<h2 class="pannel-title">
								Login
							</h2>
						</div>
						<?php
							//Verifica se a sessão erro foi criada
							if (isset($_SESSION['erro'])) {
								echo "<p style='color: red; padding: 10px; background: antiquewhite;'>
								Conta inválida. Usuário ou senha incorretos.</p>";
								session_unset($_SESSION['erro']);
							}
						?>
						<div class="pannel-body" >
							<span class="pannel-item-default">Usuário:</span>
							<span class="pannel-item-default"><input type="text" name="usu"></span>
							<span class="pannel-item-default">Senha:</span>
							<span class="pannel-item-default"><input type="password" name="senha"></span>
							<span style="text-align: center;" class="pannel-item-default">
								<input type="submit" name="" value="Entrar">
								<input type="reset" name="" value="Limpar">
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
</html>