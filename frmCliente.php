<!-- FAZ PARTE PROJETEO RESERVA -->


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
          
     
        <div style="color: #8FBC8F;font-size: 20px;padding-top: 20px;padding-left: 20px;padding-bottom: 20px"> Cadastro de Clientes</div>
        <dir style="border: 0 solid #555; padding: 10px; box-shadow: 0 0 10px 0 #555;margin: auto;width: 900px;height: 580px">
            <form action="/action_page.php">
                <div style="float: left;"> 
                    <label style="padding-left: 20px">Nome</label>               
                    <input  type="tex"   placeholder="Nome completo" style="width: 467px;margin-left: 30px;margin-top: 30px; border:1px solid gray;padding-left: 10px" required>
               
                     <label style="padding-left: 20px;padding-right: 30px">CPF</label>  
                    
                      <input type="tex"   placeholder="___.___.___-__" style="width: 165px;margin-left: 25px; border:1px solid gray;padding-left: 10px;margin-right: 35px;" required>                 
                </div>
                
                <div style="float: left;"> 
                    <label style="padding-left: 20px">Email</label>               
                    <input type="email" placeholder="Informe seu email" style="width: 470px;margin-left: 30px; border:1px solid gray;padding-left: 10px" required>
               
                    <label style="padding-left: 20px;padding-right: 30px">RG</label>  
                    
                      <input type="tex"   placeholder="" style="width: 165px;margin-left: 30px; border:1px solid gray;padding-left: 10px;margin-right: 35px;" required>                   
                </div>
                <div style="float: left;"> 
                     <label style="padding-left: 20px">Tel. Fixo</label>               
                        <input type="Tel" placeholder="( )____-____" style="width: 185px;margin-left: 10px; border:1px solid gray;padding-left: 10px">
                   
                        <label style="padding-left: 20px">Celular</label>  
                        
                        <input type="tex"   placeholder="( )____-____" style="width: 185px;margin-left: 10px; border:1px solid gray;padding-left: 12px"> 
                </div>
                <div style="float: left;"> 
                   
                    <label style="padding-left: 20px">Nascimento</label>               
                        <input type="date" style="width: 165px;margin-left: 10px; border:1px solid gray;padding-left: 10px;margin-right: 35px">
                </div>
               <div style="float: left;"> 
                     <fieldset style="width:530px;height: 40px;border:0.5px solid gray;border-radius: 5px;padding-bottom: 13px;margin-left: 20px;margin-bottom: 20px">
                          <legend> Sexo </legend>
                          <input type="radio" style=";margin-left: 100px;float: left;width: 20px;height: 12px;" ><div style="float: left;padding-right: 20px;margin-right: 80px;font-size: 15px;font-style: italic;"> Feminino </div>
                          <input type="radio" style="float: left;width: 20px;height: 12px;" ><div style="float: left;font-size: 15px;font-style: italic;"> Masculino </div>
                         
                    </fieldset>
                </div>
                <div style="float: left;"> 
                    <fieldset style="border: 1px solid #555;border-radius: 5px;width: 820px;margin-left: 20px;background-color: #f1f1f1" >
                          <legend style="color: gray"> Endereço </legend>
                          <div style="float: left;"> 
                            <label style="padding-left: 20px">Logradouro</label>               
                            <input type="tex"   placeholder="Rua..." style="width: 460px;margin-left: 30px; border:1px solid gray;padding-left: 10px">
                       
                             <label style="padding-left: 25px;">Nº</label>  
                            
                              <input type="tex"   style="width: 130px;margin-left: 10px;border:1px solid gray;padding-left: 10px;margin-right: 10px;">    

                            </div>
                            <div style="float: left;"> 
                            <label style="padding-left: 20px;margin-right: 33px">Bairro</label>               
                            <input type="tex"   placeholder="Rua..." style="width: 460px;margin-left: 30px; border:1px solid gray;padding-left: 10px;">
                       
                             <label style="padding-left: 20px;">CEP</label>  
                            
                              <input type="tex" placeholder="_____-___"  style="width: 130px;margin-left: 5px;border:1px solid gray;padding-left: 10px;margin-right: 10px;">    

                            </div>
                            <div style="float: left;"> 
                                <label style="padding-left: 20px;margin-right: 33px">Estado</label>               
                                <select name="estado" style="height: 35px;width: 220px;border-radius: 5px;padding-left: 10px;margin-left: 27px;"> 
                                      <option value="ac">Acre</option> 
                                      <option value="al">Alagoas</option> 
                                      <option value="am">Amazonas</option> 
                                      <option value="ap">Amapá</option> 
                                      <option value="ba">Bahia</option> 
                                      <option value="ce">Ceará</option> 
                                      <option value="df">Distrito Federal</option> 
                                      <option value="es">Espírito Santo</option> 
                                      <option value="go">Goiás</option> 
                                      <option value="ma" selected>Maranhão</option> 
                                      <option value="mt">Mato Grosso</option> 
                                      <option value="ms">Mato Grosso do Sul</option> 
                                      <option value="mg">Minas Gerais</option> 
                                      <option value="pa">Pará</option> 
                                      <option value="pb">Paraíba</option> 
                                      <option value="pr">Paraná</option> 
                                      <option value="pe">Pernambuco</option> 
                                      <option value="pi">Piauí</option> 
                                      <option value="rj">Rio de Janeiro</option> 
                                      <option value="rn">Rio Grande do Norte</option> 
                                      <option value="ro">Rondônia</option> 
                                      <option value="rs">Rio Grande do Sul</option> 
                                      <option value="rr">Roraima</option> 
                                      <option value="sc">Santa Catarina</option> 
                                      <option value="se">Sergipe</option> 
                                      <option value="sp">São Paulo</option> 
                                      <option value="to">Tocantins</option> 
                                     </select>

                              <label style="padding-left: 20px;">Cidade</label>  
                            
                              <input type="tex" style="width: 367px;margin-left: 5px;border:1px solid gray;padding-left: 10px;margin-right: 10px;"> 

                            </div>
                             
                    </fieldset>
                    <div style="float: right;margin-top: 15px;">                                
                         <input type="submit" name="btnCadastrar" value="Cadastrar" style="width: 100px ;height: 30px;background-color: blue;color: white;border-radius: 5px;border:0.5px solid blue">

                    </div>

                </div>
            </form>
        </dir>
    </div>
  </div>
</body>
</html>