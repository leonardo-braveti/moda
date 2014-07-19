<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<?php include "imports.php"; ?> 		
		<?php include "jquery/teste.php"; ?>	
		<link rel="stylesheet" href="<?php echo base_url("css/home.css") ?>">	
		<link rel="stylesheet" href="<?php echo base_url("css/usuarios.css") ?>">					
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
					<p id="letreiro">Usuários Cadastrados no Sistema</p>				
				</div>	
				
				<table id="tbdados">								
					<tr>
						<th>Id</th>
						<th>Nome</th>
						<th>Email</th>
						<th>Ação</th>
					</tr>
				<?php
					$n=0;
					foreach($users as $u) {					
				?>
						<tr id=<?php echo "linha".$n; ?> ><td>						
							<?php echo $u["idUser"];?>
						</td><td>
							<?php echo $u["nomeUser"];?>
						</td><td>
							<?php echo $u["emailUser"];?>
						</td><td>
							<a id="excluir" href=<?php echo base_url("/index.php/cadastrar/excluir_usuario/".$u['idUser']); ?> >Excluir</a>
						</td></tr>
				<?php
					$n++;
					}
				?>	
				
				</table>
				<br>
					
				<?php								
					echo form_button(array(
							"id" => "novo_usuario",
							"content" => "Novo Usuário",														
							"class" => "btn btn-primary",
							
					));
					
					echo "<br><br>";
					
					$attr = array('id' => 'new_usuarios');
					echo form_open("cadastrar/salvar_usuarios", $attr);					
						echo form_label("Nome","nnome");
						echo form_input(array(
							"name" => "nnome",
							"id" => "nnome",
							"class" => "form-control"
							
						));			
						echo "<br>";
						echo form_label("Email","nemail");
						?>
						<div id="novouser" class="input-group">							
							<input type="text" class="form-control" name="nemail" id="nemail">
							<span class="input-group-addon">@modanaweb.com.br</span>
						</div>
						<?php																							
						echo "<br>";
						echo form_label("Senha","nsenha");						
						echo form_password(array(
							"name" => "nsenha",
							"id" => "nsenha",
							"class" => "form-control"												
						));																				
						echo "<br>";
						echo form_button(array(
							"id" => "salvar",
							"content" => "Salvar",
							"class" => "btn btn-primary",
							"type" => "submit"
						));																			
					echo form_close();							
					
					//-------------------------------					
					$attr = array('id' => 'up_usuarios');					
					echo form_open("cadastrar/atualizar_usuarios", $attr);					
						echo form_label("Nome","nome");
						echo form_input(array(
							"name" => "anome",
							"id" => "anome",
							"class" => "form-control",
							"readonly" => "true"
							
						));			
						echo "<br>";
						echo form_label("Email","aemail");						
						?>
						<div id="autuser" class="input-group">							
							<input type="text" class="form-control" name="aemail" id="aemail" readonly="true">
							<span class="input-group-addon">@modanaweb.com.br</span>
						</div>
						<?php																							
						echo "<br>";
						echo form_label("Senha","senha");						
						echo form_password(array(
							"name" => "asenha",
							"id" => "asenha",
							"class" => "form-control"
												
						));
						echo "<input type=hidden id=oculto name=oculto value=hidden>";
						echo "<br>";
						echo form_button(array(
							"id" => "atualizar",
							"content" => "Atualizar",
							"class" => "btn btn-success",	
							"type" => "submit"
						));																			
					echo form_close();							
				?>
			</div>			
		</div>		
	</body>
<html>