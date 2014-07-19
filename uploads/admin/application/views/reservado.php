<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<?php include "imports.php"; ?> 	
		<?php include "jquery/endereco.php"; ?>	
		<link rel="stylesheet" href="<?php echo base_url("css/home.css") ?>">	
		<link rel="stylesheet" href="<?php echo base_url("css/reservado.css") ?>">			
		<title>::: Adminstração - Moda Na Web</title>		
	</head>
	<body background=<?php echo base_url("img/sandpaper.png") ?> >
		<div id="site">			
			<div id="topo">					
				<?php include "topos/topo_home.php"; ?> 		
			</div>				
			<div id="menu" class="list-group active">							
				<?php include "menu.php"; ?>	
			</div>						
			<div id="conteudo">		
				<div id = "instrucoes">
					<p id="letreiro">Endereços Reservados</p>				
				</div>	
								
				<?php					
					echo form_open("cadastrar/registrar_reservado");											
						echo form_label("Nomes","nome");
						echo form_textarea(array(
							"name" => "nome",
							"id" => "nome",
							"class" => "form-control",
							"value" => $res["nome"]
						));												
						echo "<br>";						
						echo form_label("Email","email");						
						echo form_textarea(array(
							"name" => "email",
							"id" => "email",
							"class" => "form-control",
							"value" => $res["email"]											
						));
						echo "<br>";						
						echo form_label("Telefones","telefone");
						echo form_textarea(array(
							"name" => "telefone",
							"id" => "telefone",
							"class" => "form-control",
							"value" => $res["telefone"]					
						));
						echo "<br>";
						echo form_label("Observação", "obs");
						echo form_textarea(array(
							"name" => "obser",
							"id" => "obser",
							"class" => "form-control",
							"value" => $res["observacao"]							
						));			
						echo "<br>";						
						
						
						echo form_button(array(
							"id" => "registrar",
							"content" => "Registrar",
							"class" => "btn btn-primary",
							"type" => "submit"
						));													
						echo "<br>";echo "<br>";
					echo form_close();	
					///////////////
					
					?>
				</div>			
		</div>		
	</body>
<html>