<html>
	<head>
		<?php include "imports.php"; ?>		
		<?php include "jquery/login.php"; ?>	
		<link rel="stylesheet" href="<?php echo base_url("css/login.css") ?>">		
		<title>::: Adminstração - Moda Na Web</title>
		
		
		
	</head>
	<body background=<?php echo base_url("img/sandpaper.png") ?> >
		<div id="site">
			<div id="topo">									
				<?php include "topos/topo_login.php"; ?> 			
			</div>			
			<div id="corpo">			
				<br><br>
				<?php
					echo form_open("cadastrar/home");
						echo form_label("Email","email");
						echo form_input(array(
							"name" => "email",
							"id" => "email",
							"class" => "form-control",
							"maxlength" => "50",							
						));
						echo "<br>";
						echo form_label("Senha","senha");
						echo form_password(array(
							"name" => "senha",
							"id" => "senha",
							"class" => "form-control",
							"maxlength" => "50",							
						));
						echo "<br>";
						echo form_button(array(
							"id" => "entrar",
							"content" => "Entrar",
							"class" => "btn btn-primary",
							"type" => "submit"
						));																		
					echo form_close();										
				?>
				<br>
				<span id="txt_erro" class='alert alert-danger'></span>
			</div>	
			
			
			<div id="rodape">
				<p> Todos os Direitos Reservados à Moda Na Web</p> 
				<a href ="http://www.modanaweb.com.br">www.modanaweb.com.br </a>
				<p> Desenvolvido por Brave IT Solutions</p>
				<a href ="http://www.braveti.com.br">www.braveti.com.br</a>
			</div>
		</div>
		
	</body>
<html>