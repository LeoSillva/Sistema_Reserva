<?php
 	
 	session_start();
	require 'config.php';
	if (isset($_POST['email']) && !empty($_POST['email'])) {
		$email=$_POST['email'];
		$senha=$_POST['senha'];
		$sql="SELECT * FROM usuarios WHERE email= :email AND senha= MD5(:senha)";
		$sql=$pdo->prepare($sql);
		$sql->bindValue(":email",$email);
		$sql->bindValue(":senha",$senha);
		$sql->execute();

		
		if($sql->rowCount()>0){
	        $sql=$sql->fetch();
	        $id=$sql['id'];

	        $ip=$_SERVER['REMOTE_ADDR'];

	        $_SESSION['lg']=$id;
	        
	        $sql="UPDATE usuarios SET ip= :ip WHERE id= :id";
	        $sql=$pdo->prepare($sql);
	        $sql->bindValue(":ip",$ip);
      		$sql->bindValue(":id",$id);
	        $sql->execute();

	        header("Location:index.php");
	        exit;
      	}else{
      		echo "Sem registro!";
      	}

	}
	
?>

<!--
<form method="POST">
	Email: <br>
	<input type="text" name="email"><br>
	Senha<br>
	<input type="password" name="senha"><br>	
	<input type="submit" name="Entrar"><br>
</form>
-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Tela de Login</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <div class="login">
          <section class="login-form">
           <form method="POST">
           <div class="image">
                <img src="imagens/logo.png" />
           </div>
           <div class="row">
               <input type="email" name="email" placeholder="Email" required/>
           </div>
           <div class="row">
                <input type="password" name="senha" placeholder="Password" class="form-control input-lg"  />
           </div> 
           <div class="row">
                <button style="background-color: #a3140b;" class="botao" type="submit" name="Limpar">Limpar</button>
                <button style="background-color: #228B22;" class="botao" type="submit" name="Enviar" >Entrar</button>
               </div>
            </form>
            </section>
        </div>        
    </body>
</html>
