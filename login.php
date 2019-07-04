<!-- FAZ PARTE PROJETEO RESERVA -->
<?php
 	session_start();
	require 'config.php';
  //require 'ListaReservas.php';
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
	        //$reservas=new Reservas($pdo);

	        $_SESSION['lg']=$id;
	        header("Location:index.php");
	        exit;
  	}else{
  		echo "Sem registro!";
  	}

	}
	
?>


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
               <input autofocus type="email" name="email" placeholder="Email" required/>
           </div>
           <div class="row">
                <input type="password" name="senha" placeholder="Password" class="form-control input-lg"  />
           </div> 
           <div class="row">
                <input type="submit" style="background-color: #a3140b;height: 35px;width: 80px;border:1px solid red;cursor: pointer;margin-right: 20px" class="botao" value="Limpar" name="btn_limpar">
                <input type="submit" style="background-color: green;height: 35px;width: 80px;border:1px solid #50E750;cursor: pointer;" class="botao" value="Entrar" name="btn_entrar">
                <!--<button style="background-color: #228B22;" class="botao" type="submit" name="Enviar" >Entrar</button>-->
               </div>
            </form>
            </section>
        </div>        
    </body>
</html>
