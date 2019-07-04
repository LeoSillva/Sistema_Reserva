

<?php
	$pessoa =array(
			"nome"=>"Ricardo",
			"idade"=>18,
			"bairro"=>"Centro",
			"estado"=>"MA"			
			);
	
	
	foreach($pessoa as $chave => $dado){
		echo $chave. "=".$dado."<br>";	
		
	}

?>