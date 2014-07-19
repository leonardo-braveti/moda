<?php					
	$attr = array('class' => 'form_endereco');
	echo form_open_multipart("cadastrar/registrar_endereco", $attr);											
		echo form_label("Descrição","descricao");
		echo form_input(array(
			"name" => "descritor",
			"id" => "descritor",
			"class" => "form-control"																			
		));												
		echo "<br>";						
					
		echo form_label("Logradouro","logradouro");
		echo form_input(array(
			"name" => "logradouro",
			"id" => "logradouro",
			"class" => "form-control"																			
						));												
						echo "<br>";						
					
						echo form_label("Bairro","bairro");						
						echo form_input(array(
							"name" => "bairro",
							"id" => "bairro",
							"class" => "form-control"																			
						));
							echo "<br>";						
					
						echo form_label("Cidade","cidade");
						echo form_input(array(
							"name" => "cidade",
							"id" => "cidade",
							"class" => "form-control"
						));
						echo "<br>";
							
						echo form_label("Estado (Sigla)","estado");
						echo form_input(array(
							"name" => "estado",
							"id" => "estado",
							"class" => "form-control"
						));			
						echo "<br>";			
						
						echo form_label("Telefone 1","telefone1");
						echo form_input(array(
							"name" => "telefone1",
							"id" => "telefone1",
							"class" => "form-control",			
						));
						echo "<br>";			
						
						echo form_label("Telefone 2","telefone2");
						echo form_input(array(
							"name" => "telefone2",
							"id" => "telefone2",
							"class" => "form-control",			
						));						
						echo "<br>";	
						
						echo form_label("Telefone 3","telefone3");
						echo form_input(array(
							"name" => "telefone3",
							"id" => "telefone3",
							"class" => "form-control",			
						));
						echo "<br>";			
						
						echo form_label("Foto Colorida","foto_colorida");						
						echo form_upload(array(
							"name" => "foto_colorida",
							"id" => "foto_colorida"							
						));			
						echo "<span id='msg_foto'> Para trocar a foto basta selecionar outra imagem. </span>";						
						echo "<br><br>";			
						
						echo form_label("Foto Preto e Branco","foto_preto_branco");						
						echo form_upload(array(
							"name" => "foto_preto_branco",
							"id" => "foto_preto_branco"							
						));			
						echo "<span id='msg_foto'> Para trocar a foto basta selecionar outra imagem. </span>";						
						echo "<br>";			
					
					?>	
					
					<input type=hidden name="oculto" id="oculto">
					<br>
						
					<input type="submit" value="Registrar" class="atualizar btn btn-success">						
					
					<?php
						echo form_close();						
					?>