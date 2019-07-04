<?php
	require 'config.php';
	require 'classes/reservas.classes.php';

	$reservas = new Reservas($pdo);


	if(!empty($_GET['idreserva'])) {
	  $reserva = addslashes($_GET['idreserva']);
	  
	  if($reservas->Excluir($reserva)) {
	    $reservas->Excluir($reserva);	    	    
	  }else{
	  	header("Location:index.php");
	  }

}

?>