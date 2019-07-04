<!-- FAZ PARTE PROJETEO RESERVA -->


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="grid_reservas.css">
	
</head>
<body>

 <div style="color: #8FBC8F;font-size: 20px;padding-top: 20px;padding-left: 20px;font-size: 20px;"> Reservas</div>
	

<table id="customers">
	<th colspan="6" style="text-align: right; background-color: white;border: 0"><a href="frmReservar.php" style="color: blue"> Adicionar</a></th>
	<tr>
		<th rowspan="2"  style="background-color: #756E6E;">Clientes</th>
		<th rowspan="2"  style="background-color: #756E6E;">Carro</th>
		<th colspan="2"  style="background-color: #756E6E;">Período da Reserva</th>	
		<th colspan="2" rowspan="2"  style="background-color: #756E6E">Ação</th>
	</tr>

	<tr>
		<th style="background-color: #756E6E;">Data Inicio</th>
		<th style="background-color: #756E6E;">Data Final</th>
	</tr>
	

	<?php		
			
			
		
		if(!empty($_SESSION['lg'])){				
			require 'classes/reservas.classes.php';
			require 'config.php'; //chama a conexão pdo
			
			
			$reservas=new Reservas($pdo);			
			$lista=$reservas->getReservas();?>			
			<?php	
			foreach ($lista as $item) { 
						$reserva=$item['idreserva'];
						$data1=date('d/m/Y',strtotime($item['data_inicio']));
						$data2=date('d/m/Y',strtotime($item['data_fim']));
			?>			
					<tr>
						<td><?php echo $item['pessoa'];?></td>					
						<td><?php echo $item['carro'];?></td>
						<td><?php echo $data1['data_inicio'];?></td>
						<td><?php echo $data2['data_fim'];?></td>
						<th style="background-color: white;color: green;font-size: 12px"><?php echo "<a href=editar_reserva.php?idreserva=$reserva>Editar</a>";?> </th>
						<th style="background-color: white;color: red;font-size: 12px"><?php echo "<a href=excluirreserva.php?idreserva=$reserva>Excluir</a>";?></th>
							
					</tr>					
					
			<?php	

				}
				exit;
		}
	?>	
</table>	
	  

</body>
</html>