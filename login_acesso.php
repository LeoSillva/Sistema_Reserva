<?php
 
	require 'config.php';
  	//isset — Informa se a variável foi iniciada
  	
	if (isset($_POST['email']) && !empty($_POST['email'])) {
		$email=$_POST['email'];
		$senha=$_POST['senha'];
		$sql="SELECT * FROM usuarios WHERE email= :email AND senha= MD5(:senha)";
		$sql=$pdo->prepare($sql);
		$sql->bindValue(":email",$email);
		$sql->bindValue(":senha",$senha);
		$sql->execute();

		
		if($sql->rowCount()>0){	        
	        header("Location:index_aula.php");
	        exit;
	  	}else{
	  		echo "Usuário ou senha incorreta!";
	  	}

	}
	
?>