<!--
<?php
	$pessoa =array(
			"nome"=>"Ricardo",
			"idade"=>18,
			"bairro"=>"Centro",
			"estado"=>"MA"			
			);

	foreach($pessoa as $dado){
		echo $dado."<br>";	/* passa o valor */
	}

?>
-->

<?php
	$pessoa =array(
			"nome"=>"Ricardo",
			"idade"=>18,
			"bairro"=>"Centro",
			"estado"=>"MA"			
			);
	/*$pessoa2=array_keys($pessoa);
	$pessoa3=array_values($pessoa);*/
	/*array_pop($pessoa2); remove o último registro*/
	/*array_shift($pessoa2);/* remove o primeiro registro*/
	asort($pessoa);/* ordem dos valores*/
	arsort($pessoa);/* ordem decrescente dos valores*/
	print_r($pessoa);/*
	foreach($pessoa as $chave => $dado){
		echo $chave. "=".$dado."<br>";	
		
	}*/

?>