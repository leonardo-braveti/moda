<?php
	include "../config.php";		

	$nome = $_POST['n'];
	$email = $_POST['e'];
	$assunto = $_POST['a'];	
	$texto = $_POST['m'];
	
	
	$to = $admin;
	$from = $email;
	$subject = "Nova mensagem: " .$assunto;	

	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "Content-Transfer-Encoding: 7bit\r\n";
	$headers .= "From: " . $from . "\r\n";

	@mail($to, $subject, $texto, $headers);	
	
	// ----------------  inicio meu codigo   -------------------	
	$con = mysql_connect("localhost", $usuario, $senha);
	mysql_select_db($banco, $con);
	
	$sql = "insert into mensagem(nome,email,assunto,texto, data, hora) values ('$nome', '$email', '$assunto', '$texto', curdate(), curtime())";	
	
	mysql_query($sql, $con);
	
	if(mysql_error() == "")
		echo "true";
	else 
		echo "false";
	// ----------------  fim meu codigo   -------------------
	
	
?>