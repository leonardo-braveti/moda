<?php
include "../config.php";	include "../dados_sgbd.php";	
	$adminemail = $email["email"];			$return_arr = array();

if ($_GET['send'] == 'comments'){
	$_uname = $_POST['uname'];
	$_uemail = $_POST['uemail'];
	$_title	=	$_POST['title'];	$_fone	=	$_POST['fone'];
	$_comments	=	stripslashes($_POST['message']);
		$email_check = '';


	if($_uname=="" || $_uemail=="" || $_title=="" || $_comments=="" || $_fone==""){		$return_arr["frm_check"] = 'error';
		$return_arr["msg"] = "Por favor, preencha todos os campos!";
	} 	
	elseif(filter_var($_uemail, FILTER_VALIDATE_EMAIL)) {	
		$to = $adminemail;
		$from = $_uemail;		$subject = "Mensagem do site ".$empresa["marca"]." : ".$_title;
		$message = "<html><body><strong>Nome::</strong> $_uname <br> <strong>Remetente::</strong> $_uemail <br> <strong>Telefone::</strong> $_fone <br> <strong>Mensagem::</strong> $_comments</body></html>";
				$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "Content-Transfer-Encoding: 7bit\r\n";
		$headers .= "From: " . $from . "\r\n";
		@mail($to, $subject, $message, $headers);	
	// ----------------  inicio meu codigo   -------------------	
		$con = mysql_connect("localhost", $usuario, $senha);		mysql_select_db($banco, $con);			$nome = $_POST['uname'];
		$email = $_POST['uemail'];
		$assunto =$_POST['title'];
		$texto	= stripslashes($_POST['message']);		$fone	=	$_POST['fone'];
		$sql = "insert into mensagem(nome,email,assunto,telefone, texto, data, hora) values ('$nome', '$email', '$assunto', '$fone', '$texto', curdate(), curtime())";	
		mysql_query($sql, $con);	
	// ----------------  fim meu codigo   -------------------	
	} 
	else {      
		$return_arr["frm_check"] = 'error';
		$return_arr["msg"] = "Por favor, informe um email válido!";
	}

	echo json_encode($return_arr);
}

?>