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
					<p id="letreiro">Configuações do Template Natura</p>				
				</div>	
								
				<?php					
					echo form_open_multipart("cadastrar/registrar_configurar");											
						echo form_label("Cor","cor");						
						?>
						
						<select id="cor" name="cor">
							<?php
								$colors = array("Azul 1" => "blue" , "Azul 2" => "blue-alt", "Verde 1" => "green", "Verde 2" => "green-alt", "Oliva" => "olive", "Laranja" => "orange", "Vermelho 1" => "red", "Vermelho 2" => "red-alt", "Rosa" => "rose", "Amarelo" => "yellow");													
								ksort($colors);
								foreach($colors as $key => $value){									
									
									if($value == $config["cor"])
										echo "<option selected value=$value>$key</option>";
									else
										echo "<option value=$value>$key</option>";										
								}		
			
								
							?>
						</select>
						
						
						<?php
						echo "<br><br>";						
						echo form_label("Background 1","back1");						
						echo form_upload(array(
							"name" => "back1",
							"id" => "back1"																
						));
						echo "<br>";						
						echo form_label("Background 2","back2");						
						echo form_upload(array(
							"name" => "back2",
							"id" => "back2"																
						));
						echo "<br>";						
						echo form_label("Background 3","back3");						
						echo form_upload(array(
							"name" => "back3",
							"id" => "back3"																
						));
						echo "<br>";						
						echo form_label("Background 4","back4");						
						echo form_upload(array(
							"name" => "back4",
							"id" => "back4"																
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