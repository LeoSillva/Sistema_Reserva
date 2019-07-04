
<!--arquivo vai fazer a conexão e importar no index e login-->

<?php

	//<?php header("Content-type: text/html; charset=utf-8"); 

	try{
		$pdo = new PDO("mysql:dbname=db_carro;host=localhost:3307","root","");
		//echo"CONECTADOOOOOO";
	}catch(PDOException $e){
		echo "ERRO:".$e->getMessage();
		
	}
?>
















<!--
$pdo = new PDO("mysql:dbname=dbcarro;host=localhost","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

-->