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
					if(count($empr)<2){
						echo form_open("cadastrar/salvar_marca");
							echo form_label("Descrição da empresa","texto_empresa");
							echo form_textarea(array(
								"name" => "texto_empresa",
								"id" => "texto_empresa",
								"class" => "form-control"
						));						
						echo "<br>";
						echo form_label("Marca","marca");						
						echo form_input(array(
							"name" => "marca",
							"id" => "marca",
							"class" => "form-control"												
						));		
						echo "<br>";
						echo form_label("Email","email");
				?>
						<div id='autemail' class='input-group'>
							<input type='text' class='form-control' name='email' id='email'>
							<span class='input-group-addon' id='helpemail' name='helpemail'>@modanaweb.com.br</span>
						</div>
						<br>
						<p id="endereco"> Endereço Principal </p>
						
						<label for="logradouro">Logradouro</label>
						<input type="text" name="logradouro" id="logradouro" class="form-control">
						
						<br>
						<label for="bairro">Bairro</label>
						<input type="text" name="bairro" id="bairro" class="form-control">	
						
						<br>
						<label for="cidade">Cidade</label>
						<input type="text" name="cidade" id="cidade" class="form-control">							
						
						<br>
						<label for="estado">Estado (sigla)</label>
						<input type="text" name="estado" id="estado" class="form-control">							
						<br>
						
				<?php										
						echo form_label("Telefone à divulgar","fone_divulgar");
						echo form_input(array(
							"name" => "fone_divulgar",
							"id" => "fone_divulgar",
							"class" => "form-control"
						));			
						echo "<font color=red  <p style='font-weight:bold'> Para cadastrar múltiplos telefones, separe os mesmos com uma barra (/). </p> </font>";
						echo "<br>";
						
						echo form_label("Telefone Contato","fone_contato");
						echo form_input(array(
							"name" => "fone_contato",
							"id" => "fone_contato",
							"class" => "form-control"
						));			
						echo "<font color=red  <p style='font-weight:bold'> Para cadastrar múltiplos telefones, separe os mesmos com uma barra (/). </p> </font>";
						echo "<br>";
						
						echo form_label("Diretório de Acesso","dir_acesso");
						?>
						<div id="autacesso" class="input-group">																				
							<span class="input-group-addon">http://www.modanaweb.com.br/</span>
							<input type="text" class="form-control" name="dir_acesso" id="dir_acesso">
						</div>
						<?php
						echo "<br>";
						echo form_label("Email de Contato","email_contato");
						echo form_input(array(
							"name" => "email_contato",
							"id" => "email_contato",
							"class" => "form-control"							
						));											
						?>						
						<br>
						
						<p id="rsociais"> Redes Sociais :: Inclua até 3 conexões sociais!</p>										
						<label for="rede1">Opção1</label>						
						<input type="text" class="form-control" name="rede1" id="rede1">						
						<br>
						
						<label for="rede1">Opção2</label>						
						<input type="text" class="form-control" name="rede2" id="rede2">						
						<br>
						
						<label for="rede1">Opção3</label>						
						<input type="text" class="form-control" name="rede3" id="rede3">						
						<br>
						
						<?php
						echo form_label("Descrição do contato","texto_contato");
						echo form_textarea(array(
							"name" => "texto_contato",
							"id" => "texto_contato",
							"class" => "form-control"								
						));	
						echo "<br>";							
						echo form_label("Observações","observacao");
						echo form_textarea(array(
							"name" => "observacao",
							"id" => "observacao",
							"class" => "form-control"							
						));						
						echo "<br>";
						echo form_button(array(
							"id" => "Salvar",
							"content" => "Salvar",
							"class" => "btn btn-primary",
							"type" => "submit"
						));						
						echo form_close();			
					}
					else{
						echo form_open("cadastrar/atualizar_marca");
						echo form_label("Descreva a empresa","texto_empresa");
						echo form_textarea(array(
							"name" => "texto_empresa",
							"id" => "texto_empresa",
							"class" => "form-control",
							"value" => $empr['texto_empresa']
						));
						echo "<br>";
						echo form_label("Nome da marca","marca");						
						echo form_input(array(
							"name" => "marca",
							"id" => "marca",
							"class" => "form-control",												
							"value" => $empr['marca']
							
						));			
						echo "<br>";
						echo form_label("Email","email");
						
						$ep1 = explode ("@", $empr['email']);
						?>
						
						<div id='autemail' class="input-group">							
							<input type="text" class="form-control" name="email" id="email" value = "<?php echo $ep1[0]; ?>" >
							<span class="input-group-addon">@modanaweb.com.br</span>
						</div>
						
						<br>
						<label for="logradouro">Logradouro</label>
						<input type="text" name="logradouro" id="logradouro" class="form-control" value="<?php echo $empr['logradouro']; ?>">
						
						<br>
						<label for="bairro">Bairro</label>
						<input type="text" name="bairro" id="bairro" class="form-control" value="<?php echo $empr['bairro']; ?>">	
						
						<br>
						<label for="cidade">Cidade</label>
						<input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo $empr['cidade']; ?>">							
						
						<br>
						<label for="cidade">Estado (sigla)</label>
						<input type="text" name="estado" id="estado" class="form-control" value="<?php echo $empr['estado']; ?>">							
						
						<br><br>
						<?php
						echo form_label("Telefone à divulgar","fone_divulgar");
						echo form_input(array(
							"name" => "fone_divulgar",
							"id" => "fone_divulgar",
							"class" => "form-control",
							"value" => $empr['fone_divulgar']
												
						));		
						echo "<font color=red  <p style='font-weight:bold'> Para cadastrar múltiplos telefones, separe os mesmos com uma barra (/). </p> </font>";
						
						echo form_label("Telefone Contato","fone_contato");
						echo form_input(array(
							"name" => "fone_contato",
							"id" => "fone_contato",
							"class" => "form-control",
							"value" => $empr['fone_contato']											
						));			
						echo "<font color=red  <p style='font-weight:bold'> Para cadastrar múltiplos telefones, separe os mesmos com uma barra (/). </p> </font>";
						
						echo "<br>";
						echo form_label("Diretório de Acesso","dir_acesso");
						
						$lpu = explode("/", $empr['dir_acesso']);						
						?>
						<div id="autacesso" class="input-group">														
							<span class="input-group-addon">http://www.modanaweb.com.br/</span>
							<input type="text" class="form-control" name="dir_acesso" id="dir_acesso" value="<?php echo $lpu[3]; ?>">
						</div>
						<?php
						echo "<br>";
						echo form_label("Email de Contato","email_contato");
						echo form_input(array(
							"name" => "email_contato",
							"id" => "email_contato",
							"class" => "form-control",
							"value" => $empr['email_contato']					
						));						
						?>
						<br>
						<p id="rsociais"> Redes Sociais :: Inclua até 3 conexões sociais!</p>						
						<label for="rede1">Opção 1</label>						
						<input type="text" class="form-control" name="rede1" id="rede1" value = "<?php echo $empr['rede1']; ?>">						
						<br>
						
						<label for="rede1">Opção 2</label>						
						<input type="text" class="form-control" name="rede2" id="rede2" value = "<?php echo $empr['rede2']; ?>">
						<br>
						
						<label for="rede1">Opção 3</label>						
						<input type="text" class="form-control" name="rede3" id="rede3" value = "<?php echo $empr['rede3']; ?>">
						<br>
						
						<?php
						echo form_label("Descrição do contato","texto_contato");
						echo form_textarea(array(
							"name" => "texto_contato",
							"id" => "texto_contato",
							"class" => "form-control",
							"value" => $empr['texto_contato']
						));
						echo "<br>";	
						echo form_label("Observações","observacao");
						echo form_textarea(array(
							"name" => "observacao",
							"id" => "observacao",
							"class" => "form-control",
							"value" => $empr['observacao']				
						));						
						echo "<br>";
						echo form_button(array(
							"id" => "Atualizar",
							"content" => "Atualizar",
							"class" => "btn btn-primary",
							"type" => "submit"
						));								
					?>
						<input type="hidden" name="totenderecos" id="totenderecos">
					<?php
					echo form_close();		
					}							
					
				?>
			</div>			
		</div>		
	</body>
<html>