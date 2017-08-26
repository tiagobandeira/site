<div class="content ligth">
		<?php
			if (isset($_SESSION['user'])) {
				if (isset( $_GET['page'])) {
					$page = $_GET['page'];
					 if($page == 2){
						include_once('pannel.php');
						$flag = 1;
					}else if($page == 3){
						include_once('list_user.php');
						include_once('list.php');
						$flag = 1;
					}else if($page == 4){
						session_destroy();
						header('location: index.php');
					}
				}else{
					
					$page = 1;
				}
			}else{
				header('location: index.php');
			}
			#include_once('pannel.php');
			#include_once('list.php');
			#include_once('conteudo.php');
		?>
