<?php

	$dadosjson = file_get_contents('dados.json');
	
	$dadosJsonDecoficados = json_decode($dadosjson, true);
	
	print_r ($dadosJsonDecoficados['data']['barcode']);
			echo "<br><br>";
	print_r ($dadosJsonDecoficados['data']['link']);
			echo "<br><br>";
	print_r ($dadosJsonDecoficados['data']['charge_id']);

	echo "<br><br>";

	//foreach ($dadosJsonDecoficados['data'] as $boleto){
			foreach ($dadosJsonDecoficados['data'] as $boleto){
		   
		//	print_r ($boleto['barcode']);
			
		
			
			
			
			
		//	echo ($boleto['barcode']);
		
		//	echo "<br>";
			
		//	echo ($boleto['link']);
		
		//	echo "<br>";
			
		//	echo $identificacao = ($boleto['charge_id']); 
			
	//		echo "<br>";
			
	//		echo $boleto[link];
			
			
        }
		
		
		








?>