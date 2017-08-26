<?php
if (isset($_SESSION['user'])) {
	include_once('nav.php'); 
?>
<div class="col-6">
	<div class="grid">
		<div class="col-2">
			<div class="pannel">
				<div class="pannel-header cyan-coral">
					<h3>Postagens</h3>
				</div>
				
			
			<?php  
				require_once('../model/connect.php');
				$sql = "SELECT titulo FROM post ORDER BY idpost DESC";
				$resulte = $con->query($sql);
				if ($resulte->num_rows > 0) {
					echo "<div class='pannel-body'>";
					while ($row = $resulte->fetch_assoc()) {
			?>
					<div class="pannel-item action-blue"><?php  echo utf8_encode($row['titulo']) ?></div>	
				
			<?php 
					}
					echo "</div>";
				}
		    ?>
			</div>
	</div>
	<div class="col-2">
			<div class="pannel">
				<div class="pannel-header cyan-coral">
					<h3>Categorias</h3>
				</div>
				
			
			<?php  
				require_once('../model/connect.php');
				$sql = "SELECT nome FROM categoria ORDER BY idcategoria DESC";
				$resulte = $con->query($sql);
				if ($resulte->num_rows > 0) {
					echo "<div class='pannel-body'>";
					while ($row = $resulte->fetch_assoc()) {
			?>
				
					<div class="pannel-item action-blue"><?php  echo utf8_encode($row['nome']) ?></div>	
				
			<?php 
					}
					echo "</div>";
				}
		    ?>
			</div>
	</div>
	</div>
</div>
		
		
</div>
<?php  
	}else{
		header('location: index.php');
	}
?>