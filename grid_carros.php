<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
</head>
<body>
<a href="#">+ Carros</a>
<table>		
	<tr>
		<th>Id</th>
		<th>Carros</th>	
		<th colspan="2">Ações</th>
	</tr>

	<?php		
		require 'config.php';//chama a conexão $pdo		
		require 'classes/carros.classes.php';			
		$carros=new Carros($pdo);//passa como parâmetro a conexão $pdo
		$lista=$carros->getCarros();?>			
		<?php	
		foreach ($lista as $car){ ?>
		  <tr>
			<td style="text-align: center;"><?php echo $car['id'];?></td>			
			<td><?php echo $car['nome'];?></td>

			<th><?php echo "<a href=#
				style='color:red;text-decoration: none;font-size: 12px;color:blue'>Editar</a>";?></th>
			
			<!-- FIM LINK EDITAR -->
			<th><?php echo "<a href=# 
			style='color:red;text-decoration: none;font-size: 12px'>Excluir</a>";?></th>
		  </tr>
		<?php
			}
			exit;
	?>	

</table>		  

</body>
</html>