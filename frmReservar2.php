<!-- FAZ PARTE PROJETEO RESERVA -->
<?php
require 'config.php';
require 'classes/reservas.classes.php';
require 'classes/carros.classes.php';

$reservas = new Reservas($pdo);
$carros = new Carros($pdo);

if(!empty($_POST['carro'])) {
  $carro = addslashes($_POST['carro']);
  $data_inicio = explode('/', addslashes($_POST['data_inicio']));
  $data_fim = explode('/', addslashes($_POST['data_fim']));
  $pessoa = addslashes($_POST['pessoa']);

  $data_inicio = $data_inicio[2].'-'.$data_inicio[1].'-'.$data_inicio[0];
  $data_fim = $data_fim[2].'-'.$data_fim[1].'-'.$data_fim[0];

  if($reservas->verificarDisponibilidade($carro, $data_inicio, $data_fim)) {
    $reservas->reservar($carro, $data_inicio, $data_fim, $pessoa);
    header("Location: index.php");
    exit;
  } else {
    echo "Este carro já está reservado neste período.";
  }


}




?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sistem de Reservas</title> 
  <link rel="stylesheet" type="text/css" href="menu.css">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="formulario.css">
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
          <li ><a href="index.php">Reservas</a></li>          
          <li class="active"><a href="frmcliente.php">Clientes</a></li>
          <li><a href="#">Carros</a></li>
          <li><a href="#" class="sobre" >Sobre o Sistema</a></li>
        </ul>
      </nav>
      
    </div>
    
    <div class="corpo">
        <div class="user" >
          <p>Usuário: Pedriana Castro  |  <a href="#"><u>Sair</u></a></p>
        </div>  
          
     
        <div style="color: #8FBC8F;font-size: 20px;padding-top: 20px;padding-left: 20px;padding-bottom: 20px"> Cadastrar Reserva</div>
        <dir style="border: 0 solid #555; padding: 10px; box-shadow: 0 0 10px 0 #555;margin: auto;width: 900px;height: 580px">
            

              <form method="POST">
                Carro:<br/>
                <select name="carro">
                  <?php
                  $lista = $carros->getCarros();

                  foreach($lista as $carro):
                    ?>
                        <option value="<?php echo $carro['idcarro']; ?>"><?php echo $carro['nome']; ?></option>
                    <?php
                  endforeach;
                  ?>
                </select><br/><br/>

                Data de início:<br/>
                <input type="text" name="data_inicio" /><br/><br/>

                Data de fim:<br/>
                <input type="text" name="data_fim" /><br/><br/>

                Nome da pessoa:<br/>
                <input type="text" name="pessoa" /><br/><br/>

                <input type="submit" value="Reservar" />
        </dir>
    </div>
  </div>
</body>
</html>