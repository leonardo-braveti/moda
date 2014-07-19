<?php

	/* ******** ARQUIVO DE CONFIGURAÇÃO ************
	
		MODIFIQE APENAS OS DADOS DENTRO DA CLAUSLA **ELSE**
		
	*********************************************** */
	
	$place = "casa";	
	
	$usuario = ""; 
	$senha = "";   
	$banco = "";   
	$admin = "";
	
	if($place == "casa"){    //"casa"
		$usuario = "root"; //"root"
		$senha = "1234";  //""
		$banco = "megamoda";  //"megamoda"
		$admin = "leongamerti@gmail.com";
	}	
	else{
		$usuario = 'modanabr_site001';  // nome do usuario do banco em produção 
		$senha = '24613524'; // senha do usuario do banco
		$banco = "modanabr_site001"; // nome do banco		
	}
?>