<html>
	<head>
		<?php include "imports.php"; ?> 		
		<link rel="stylesheet" href="<?php echo base_url("css/home.css") ?>">	
		<link rel="stylesheet" href="<?php echo base_url("css/mensagens.css") ?>">	
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
					<p id="letreiro">Mensagens Recebidas</p>					
				</div>	
					<table border="0" cellpadding="4" cellspacing="0">
						<thead>
							<tr>
								<!--<th>Numero</th>-->
								<th>Nome</th>
								<th>Email</th>
								<th>Telefone</th>
								<th>Assunto</th>
								<th>Mensagem</th>
								<th>Data</th>
								<th>Hora</th>
							</tr>
						</thead>
						<tbody>
							<?php 								
								foreach($msg as $m){								
							?>	
							<tr>
								<!--<td> <?php echo utf8_decode($m["id"]); ?> </td>-->
								<td> <?php echo $m["nome"]; ?> </td>
								<td> <?php echo $m["email"]; ?> </td>
								<td> <?php echo $m["telefone"]; ?> </td>
								<td> <?php echo $m["assunto"]; ?> </td>
								<td> <?php echo $m["texto"]; ?> </td>
								<td> <?php 
										$ndata =  utf8_decode($m["data"]); 
										$partes = explode("-", $ndata);
										$ndata = $partes[2]."/".$partes[1]."/".$partes[0];
										echo $ndata;
									?> 
								</td>
								<td> <?php echo utf8_decode($m["hora"]); ?> </td>
							</tr>
							<?php
								}
							?>	
						</tbody>
					</table>	
			</div>			
		</div>		
	</body>
<html>