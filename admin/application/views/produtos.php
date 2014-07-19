<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<?php include "imports.php"; ?> 	
		<?php include "jquery/produtos.php"; ?>	
		<link rel="stylesheet" href="<?php echo base_url("css/home.css") ?>">	
		<link rel="stylesheet" href="<?php echo base_url("css/produtos.css") ?>">			
		<title>::: Adminstração - Moda Na Web</title>		
	</head>
	<body background=<?php echo base_url("img/sandpaper.png") ?> >
		<?php 
			
			
		?>
		<div id="site">			
			<div id="topo">					
				<?php include "topos/topo_home.php"; ?> 		
			</div>				
			<div id="menu" class="list-group active">							
				<?php include "menu.php"; ?>	
			</div>						
			<div id="conteudo">		
				<div id = "instrucoes">
					<p id="letreiro">Produtos Cadastrados no Sistema</p>				
				</div>	
				<a href="#form_novo">
					<?php
						echo form_button(array(							
							"content" => "Novo Produto",														
							"class" => "btn btn-primary novo_produto",
						));					
					?>	
				</a>
				<br><br>
				<table id="tbdados">								
					<tr>
						<th>Foto</th>						
						<th>Id</th>
						<th>Data</th>
						<th>Titulo</th>						
						<th>Página</th>
						<th>Posição</th>
						<th>Coleção</th>
						<th>Ref.</th>
						<th>Preço</th>
						<th>Descrição</th>
						<th>Ação</th>
					</tr>
				<?php
					$n=0;
					foreach($prods as $p) {					
				?>
						<tr id=<?php echo "linha".$n; ?> >
						<td>
							<a href="#form2">
								<?php 
									$fotinho = base_url("../uploads/".$p['foto']);
									echo "<img width=80 height=80 src=$fotinho>"; 								
								?>
							</a>
						</td><td>
							<?php echo $p["id"];?>
						</td><td>
							<?php 
								$pr = explode("-", $p["data"]);
								echo $pr[2]."/".$pr[1]."/".$pr[0];
							?>
						</td><td>
							<?php echo $p["titulo"];?>
						</td><td>							
							<?php echo $p["pagina"];?>
						</td><td>
							<?php echo $p["posicao"];?>	
						</td><td>
							<?php echo $p["colecao"];?>
						</td><td>
							<?php echo $p["referencia"];?>
						</td><td>
							<?php echo "R$ ".str_replace("." , ",", $p["preco"]);?>
						</td><td>
							<?php echo $p["descricao"];?>
						</td><td>
							<a id="alterar" href="#form2" >Alterar</a>
							<br>
							<a id="excluir" href=<?php echo base_url("/index.php/cadastrar/excluir_produto/".$p['id']); ?> >Excluir</a>
						</td></tr>
				<?php
					$n++;
					}
				?>	
				
				</table>
				<br>
				
				<?php
					echo "<a href='#form_novo'>";
						echo form_button(array(							
							"content" => "Novo Produto",														
							"class" => "btn btn-primary novo_produto",
						));
					echo "</a>";
					echo "<br><br>";					
					
					?>
					<div id="form_novo">
						<?php
							$attr = array('id' => 'new_produto');
							echo form_open_multipart("cadastrar/salvar_produtos", $attr);											
								echo form_label("Titulo do Produto","titulo");
								echo form_input(array(
									"name" => "titulo",
									"id" => "titulo",
									"class" => "form-control"												
								));												
								echo "<br>";
								echo form_label("Foto","userfile");						
								echo form_upload(array(
									"name" => "userfile",
									"id" => "userfile",							
								));			
								echo "<br>";
								echo form_label("Página do Produto","pagina");
								$opc = array(
									$camposdomenu["opc1"] => $camposdomenu["opc1"],
									$camposdomenu["opc2"] => $camposdomenu["opc2"],
									$camposdomenu["opc3"] => $camposdomenu["opc3"]												
								);			
								echo "&nbsp&nbsp&nbsp";
								echo form_dropdown('pagina', $opc, 'posicao');
								echo "<br><br>";
								echo form_label("Posição","tpdroduto");						
								echo form_input(array(
									"name" => "posicao",
									"id" => "posicao",
									"class" => "form-control"											
								));
								echo "<br>";						
								echo form_label("Coleção","colecao");
								echo form_input(array(
									"name" => "colecao",
									"id" => "colecao",
									"class" => "form-control",												
								));
								echo "<br>";
								echo form_label("Referencia","referencia");
								echo form_input(array(
									"name" => "referencia",
									"id" => "referencia",
									"class" => "form-control"														
								));			
								echo "<br>";						
								echo form_label("Preço","preco");
						?>
						
								<div id="dinproduto" class="input-group">													
									<span class="input-group-addon">R$</span>
									<input type="text" class="form-control" name="preco" id="preco">							
								</div>
						
						<?php						
								echo "<br>";		
								echo form_label("Descrição do Produto","descricao");
								echo form_textarea(array(
									"name" => "descricao",
									"id" => "descricao",
									"class" => "form-control"
								));			
								echo "<br>";
								echo form_button(array(
									"id" => "salvar",
									"content" => "Salvar",
									"class" => "btn btn-primary",
									"type" => "submit"
								));													
								echo "<br>";echo "<br>";
							echo form_close();	
						?>
					</div>
					
					<?php
					echo "<div id=formfoto>";
						 echo "<img id='foto_upd' width=540px height = 720px>";
					echo "</div>";
					
					echo "<div id=form2>";											
						$attr = array('id' => 'up_produto');						
						echo form_open_multipart("cadastrar/atualizar_produtos", $attr);											
							echo form_label("Titulo do Produto","atitulo");
							echo form_input(array(
								"name" => "atitulo",
								"id" => "atitulo",
								"class" => "form-control"												
							));			
							echo "<br>";
							echo form_label("Foto","auserfile");						
							echo form_upload(array(
								"name" => "auserfile",
								"id" => "auserfile",							
							));		
							echo "<span id='msg_foto'> Para trocar a foto basta selecionar outra imagem. </span>";
							
							echo "<br><br>";
							echo form_label("Página do Produto","apagina");
							$opc = array(
								$camposdomenu["opc1"] => $camposdomenu["opc1"],
								$camposdomenu["opc2"] => $camposdomenu["opc2"],
								$camposdomenu["opc3"]												 => $camposdomenu["opc3"]												
							);									
							echo "&nbsp&nbsp&nbsp";
							
							echo form_dropdown('apagina', $opc, "",  'id="apagina"');
												
							echo "<br><br>";	
							echo "<p><b>Página Atual -->  <font color = red><span id='pagebefore' ></font></color></b></p>";
							echo "<br>";	
														
							echo form_label("Posição","aposicao");						
							echo form_input(array(
								"name" => "aposicao",
								"id" => "aposicao",
								"class" => "form-control"											
							));			
							echo "<br>";
							echo form_label("Coleção","acolecao");
							echo form_input(array(
								"name" => "acolecao",
								"id" => "acolecao",
								"class" => "form-control",												
							));
							echo "<br>";	
							echo form_label("Referencia","areferencia");
							echo form_input(array(
								"name" => "areferencia",
								"id" => "areferencia",
								"class" => "form-control"														
							));			
							echo "<br>";	
							echo form_label("Preço","apreco");
							?>
							<div id="dinproduto" class="input-group">							
								<span class="input-group-addon">R$</span>
								<input type="text" class="form-control" name="apreco" id="apreco">							
							</div>
							<?php						
							echo "<br>";	
							echo form_label("Descrição do Produto","adescricao");
							echo form_textarea(array(
								"name" => "adescricao",
								"id" => "adescricao",
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
							echo "<br>";echo "<br>";
						echo form_close();								
					echo "</div>";
					?>
				</div>			
		</div>		
	</body>
<html>