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
					<p id="letreiro">Menu Secundário</p>				
				</div>	
								
				<?php					
					echo form_open("cadastrar/registrar_menu_secundario");											
						echo form_label("Campo 1","opc1");
						echo form_input(array(
							"name" => "opc1",
							"id" => "opc1",
							"class" => "form-control",
							"value" => $secundario["opc1"]
						));												
						echo "<br>";						
						
						echo form_label("Campo 2","opc2");
						echo form_input(array(
							"name" => "opc2",
							"id" => "opc2",
							"class" => "form-control",
							"value" => $secundario["opc2"]
						));												
						echo "<br>";						
						
						echo form_label("Campo 3","opc3");
						echo form_input(array(
							"name" => "opc3",
							"id" => "opc3",
							"class" => "form-control",
							"value" => $secundario["opc3"]
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