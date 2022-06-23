<?php

	$dadosjson = file_get_contents('dados.json');
	
	$dadosJsonDecoficados = json_decode($dadosjson);
	
	//print_r ($dadosJsonDecoficados);
	
	$data = $dadosJsonDecoficados;
	
	foreach ($data as $boleto )
    {
		echo $boleto->barcode;
    }		
      
		
		
		








?>