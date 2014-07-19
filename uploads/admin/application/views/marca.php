<html>
	<head>
		<?php include "imports.php"; ?> 		
		<?php include "jquery/marca.php"; ?>	
		<link rel="stylesheet" href="<?php echo base_url("css/home.css") ?>">	
		<link rel="stylesheet" href="<?php echo base_url("css/marca.css") ?>">	
		<title>::: Adminstração - Moda Na Web</title>		
	</head>
	<body background=<?php echo base_url("img/sandpaper.png") ?> >
		<div id="site">
			<div id="topo">					
				<?php include "topos/topo_home.php"; ?> 		
			</div>	
						
			<div id="menu" class="list-group active">							
				<?php
					include "menu.php";
				?>
			</div>			
			<div id="conteudo">		
				<div id = "instrucoes">
					<p id="letreiro">Dados da Empresa</p>
					<p id="atencao">(ATENÇÃO!!! ESSA PÁGINA SOMENTE PODERÁ SER PREENCHIDA PELA MODA NA WEB.)</p>
				</div>	
				<?php																
					echo form_open_multipart("cadastrar/registrar_marca");							
					
					echo "<br>"; 						
					
					echo form_label("Nome da Marca","marca");						
					echo form_input(array(
						"name" => "marca",
						"id" => "marca",
						"class" => "form-control",												
						"value" => $empr["marca"]
					));		
						
					echo "<br>";
					
					echo form_label("Logomarca","logomarca");						
					echo form_upload(array(
						"name" => "logomarca",
						"id" => "logomarca"
					));		
					echo "<br>";

					echo form_label("Banner Topo","banner");						
					echo form_upload(array(
						"name" => "banner",
						"id" => "banner"
					));		

					echo "<font color=red  <p style='font-weight:bold'>Largura: 800px</p> </font>";		echo "<br>";

					$email_marca = "";
					if($empr['dir_acesso'] !=""){
						$lpu = explode("/", $empr['dir_acesso']);						
						$email_marca = $lpu[3];
					}
				?>
					<label for="dir_acesso">Diretório de Acesso</label>
					<div id="autacesso" class="input-group">														
						<span class="input-group-addon">http://www.modanaweb.com.br/</span>
						<input type="text" class="form-control" name="dir_acesso" id="dir_acesso" value="<?php echo $email_marca; ?>">
					</div>
				
					<br>
						
				<?php						
				
					$ep1 = explode ("@", $empr['email']);
				?>
					<label for="email">E-mail</label>
					<div id='autemail' class="input-group">							
						<input type="text" class="form-control" name="email" id="email" value = "<?php echo $ep1[0]; ?>" >
						<span class="input-group-addon">@modanaweb.com.br</span>
					</div>
					<br>
					
					<label for="email">Organização de Imagens do Catálogo</label>
					<div id='autemail' class="input-group">							
						<input type="radio" name="tipo" id="rand" value="rand">Randômico 
						<br>
						<input type="radio" name="tipo" id="seq" value="seq">Sequencial
					</div>
					<br>
				<?php
					echo form_button(array(
						"id" => "Registrar",
						"content" => "Registrar",
						"class" => "btn btn-primary",
						"type" => "submit"
					));						
					echo form_close();			
					
					$caminho = "../../uploads/";
					$foto = $empr['logomarca'];
					$foto2= $empr['banner'];
					
					if($foto == ""){
						$foto = "logo_default.jpg";
						$logo_foto = $caminho.$foto;					
					}
					else{
						$logo_foto = $caminho.$foto;					
					}
					
					if($foto2 == ""){
						$foto2 = "logo_default.jpg";
						$logo_foto2 = $caminho.$foto2;					
					}
					else{
						$logo_foto2 = $caminho.$foto2;					
					}
					
					echo form_close();
				?>
					<div id="logodiv">
						<img  class="peq_logo" src="<?php echo $logo_foto; ?>">
						<br><br>
						<img  class="peq_logo2" src="<?php echo $logo_foto2; ?>">
					</div>	
			</div>			
		</div>		
	</body>
<html>