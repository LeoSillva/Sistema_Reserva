<!-- FAZ PARTE PROJETEO RESERVA -->

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
	<meta charset="utf-8">
	<title>Sistema de Reservas</title>	
	<link rel="stylesheet" type="text/css" href="menu.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link href="https://fonts.googleapis.com/css?family=Inconsolata|Lobster|Poiret+One|Sacramento|" rel="stylesheet">

</head>
<body>
	<div class="container">
		<div class="menu_esquerdo">
			
			<div class="menu_topo">
				<div class="userinfo">
					<div class="userinfo_photo">
						<img src="imagens/logo.png" border="0" width="150">
					</div>	
				</div>
			</div>
			
			
			<nav>
				<ul>
				  <li class="active"><a href="index.php">Reservas</a></li>				  
				  <li><a href="frmCliente.php">Clientes</a></li>
				  <li><a href="grid_carros.php">Carros</a></li>
				  <li><a href="#" class="sobre" >Sobre o Sistema</a></li>
				</ul>
			</nav>
			
		</div>
		
		<div class="corpo">
			<div class="user" >
				<p>Usuário: Pedriana Castro  |  <a href="#"><u>Sair</u></a></p>
			</div>	
					
			<div class="registros"> 
					<?php include 'grid_reservas.php';	?>
			</div>
		</div>
	</div>
</body>
</html>