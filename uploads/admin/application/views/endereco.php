<html>
	<head>		
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<?php include "imports.php"; ?> 	
		<?php include "jquery/endereco.php"; ?>	
		<link rel="stylesheet" href="<?php echo base_url("css/home.css") ?>">	
		<link rel="stylesheet" href="<?php echo base_url("css/endereco.css") ?>">			
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
					<p id="letreiro">Endereços</p>				
				</div>	
				
				
				<!--- ENDERECO PRINCIPAL -->
				<div class="cordeon">
					<h3 id="prim"> Endereco Principal </h3>
					
					<div>
						<table id="tbdados_principal">								
							<tr>
								<th>Descrição</th>		
								<th>Logradouro</th>						
								<th>Bairro</th>
								<th>Cidade</th>
								<th>Estado</th>												
								<th>Telefone 1</th>											
								<th>Telefone 2</th>											
								<th>Telefone 3</th>											
							</tr>
							<tr>
								<td>											
									<?php echo $principal["descricao"];?>
								</td><td>																									
									<?php echo $principal["logradouro"];?>
								</td><td>							
									<?php echo $principal["bairro"];?>
								</td><td>
									<?php echo $principal["cidade"];?>	
								</td><td>
									<?php echo $principal["estado"];?>
								</td><td>
									<?php echo $principal["telefone1"];?>
								</td><td>
									<?php echo $principal["telefone2"];?>
								</td><td>
									<?php echo $principal["telefone3"];?>
								</td>
								
							</tr>
						</table>
						<br>
						
						<div id="foto_endereco_principal">
							<p><b> Foto Colorida </b></p>
							<?php 
								$fotinho = base_url("uploads/".$principal['foto_colorida']);
								echo "<img src=$fotinho>"; 									
							?>
							
							<br><br>
							
							<p><b> Foto Preto e Branco </b></p>
							<?php 
								$fotinho = base_url("uploads/".$principal['foto_preto_branco']);
								echo "<img src=$fotinho>"; 									
							?>
							
						</div>
						
						<div id="inclui_form_principal">
							<?php include "codigo_formulario_endereco.php"; ?>
						</div>
						
					</div>
				
					<h3  id="secun"> Enderecos Alternativos </h3>
					
					<div>
						<button class="endereco_secundario btn btn-primary">Novo Endereço</button>
						
						<br><br>								
						
						<table id="tbdados_secundario">								
							<tr>
								<th>Id</th>						
								<th>Descrição</th>						
								<th>Logradouro</th>						
								<th>Bairro</th>
								<th>Cidade</th>
								<th>Estado</th>												
								<th>Telefone 1</th>			
								<th>Telefone 2</th>			
								<th>Telefone 3</th>											
								<th>Ação</th>
							</tr>
							<?php
								$n=0;
								foreach($secundario as $p) {	
									if($p["id"] == 1)
										continue;
							?>	
									<tr id="<?php echo "linha".$n; ?>" >
										<td>				
											<?php echo $p["id"];?>
										</td><td>											
											<?php echo $p["descricao"];?>
										</td><td>							
											<?php echo $p["logradouro"];?>
										</td><td>							
											<?php echo $p["bairro"];?>
										</td><td>
											<?php echo $p["cidade"];?>	
										</td><td>
											<?php echo $p["estado"];?>
										</td><td>		
											<?php echo $p["telefone1"];?>
										</td><td>		
											<?php echo $p["telefone2"];?>										
										</td><td>
											<?php echo $p["telefone3"];?>										
										</td><td>
											<a class="alterar" id="<?php echo $n; ?>" href="#inclui_form_secundario" >Alterar</a>
											<br>
											<a  class="excluir" href=<?php echo base_url("/index.php/cadastrar/excluir_endereco/".$p['id']); ?> >Excluir</a>
										</td>
									</tr>							
							<?php
									$n++;
								}
							?>	
						</table>
						
						<br>
						<div id="foto_endereco_secundaria">
							<p><b> Foto Colorida </b></p>
							<?php 								
								echo "<img id='img_sec1'>"; 									
							?>
							
							<br><br>
							
							<p><b> Foto Preto e Branco </b></p>
							<?php 
								echo "<img id='img_sec2'>"; 									
							?>
						</div>
						
						
						<button class="endereco_secundario btn btn-primary">Novo Endereço</button>
						
						<div id="inclui_form_secundario">
							<?php include "codigo_formulario_endereco.php"; ?>
						</div>
						
					</div> <!-- fim enderecos alternativos -->
					
					<h3> Outros Endereços <h3>
					
					<div>
						<div id="inclui_form_outros">
							<form action=<?php echo base_url()."index.php/cadastrar/registrar_links"; ?> method="post">
								<label for="rede1"> Rede Social 1</label>
								<input type="text" name="rede1" class="form-control" value=<?php echo $links["rede1"]; ?>>
								<br>
								
								<label for="rede2"> Rede Social 2</label>
								<input type="text" name="rede2" class="form-control" value=<?php echo $links["rede2"]; ?>>
								<br>
								
								<label for="rede3"> Rede Social 3</label>
								<input type="text" name="rede3" class="form-control" value=<?php echo $links["rede3"]; ?>>
								<br>
								
								<label for="rede4"> Rede Social 4</label>
								<input type="text" name="rede4" class="form-control" value=<?php echo $links["rede4"]; ?>>
								<br>
								
								<label for="rede5"> Rede Social 5</label>
								<input type="text" name="rede5" class="form-control" value=<?php echo $links["rede5"]; ?>>
								<br>
								
								<label for="url1"> Url Principal</label>
								<input type="text" name="url1" class="form-control" value=<?php echo $links["url1"]; ?>>
								<br>
								
								<label for="url2"> Url 2</label>
								<input type="text" name="url2" class="form-control" value=<?php echo $links["url2"]; ?>>
								<br>
								
								<label for="url3"> Url 3</label>
								<input type="text" name="url3" class="form-control" value=<?php echo $links["url3"]; ?>>
								<br>
								
								<label for="email1"> Email 1</label>
								<input type="text" name="email1" class="form-control" value=<?php echo $links["email1"]; ?>>
								<br>
								
								<label for="email2"> Email 2</label>
								<input type="text" name="email2" class="form-control" value=<?php echo $links["email2"]; ?>>
								<br>
								
								<label for="whatsapp"> Whatsapp</label>
								<input type="text" name="whatsapp" class="form-control"  value=<?php echo $links["whatsapp"]; ?>>
								<br>
								
								<input type="submit" value="Registrar" class="btn btn-success atualizar">
							</form>
						</div>
					
					</div>
				</div>	
				
			</div>			
		</div>		
	</body>
<html>