
<!--arquivo vai fazer a conexão e importar no index e login-->

<?php
	try{
		$pdo = new PDO("mysql:dbname=dbcarro;host=Mysql@localhost:3307","root","");
		$sql="SELECT * FROM usuarios";
		$sql=$pdo->query($sql);
		if ($sql->rowCount()>0) {
			echo "TEM registro!";
		}else{
			echo "sem registro!";
		}

	}catch(PDOException $e){
		echo "ERRO:".$e->getMessage();
		
	}
?>