
<?php
	session_start();
	require 'config.php'; /*trazer o arquivo config.php/cria uma conexao com o banco*/

	if(empty($_SESSION['lg'])){		
		header("Location:login.php");
		exit;
	}else{

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Reservas de Carro</title>
	
	<link rel="stylesheet" type="text/css" href="frmesquerdo.css">
</head>
<body>
	
	<div class="container">
		<div class="menu">
				<img src="imagens/logo.png" border="0" width="150">				
			</div>			
			
			<nav>
				<ul>
				  <li><a href="#">Reservas</a></li>				  
				  <li><a href="clientes.php">Clientes</a></li>
				  <li><a href="#">Carros</a></li>
				  <li><a href="#" class="sobre" >Sobre o Sistema</a></li>
				</ul>
			</nav>	
	</div>
</body>
</html>
