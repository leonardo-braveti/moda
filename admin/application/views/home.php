<html>
	<head>
		<?php include "imports.php"; ?> 		
		<link rel="stylesheet" href="<?php echo base_url("css/home.css") ?>">			
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
					<p id="letreiro">Ações Disponíveis</p>				
				</div>
				
				<?php
						//include_once($_SERVER["DOCUMENT_ROOT"]."/cat004/admin/config_inicial.php"); 
				?>
					
					
				<iframe id="mensageria" src="http://www.modanaweb.com.br/catalogoNoticias/principal.htm"></iframe>
				
				<?php /*<ul>	
					<li>Cadastrar e atualizar dados da empresa e sua respectiva marca.</li>
					<li>Criar, atualizar e excluir usuários.</li>
					<li>Criar, atualizar e excluir produtos.</li>
				</ul>*/ ?>
			</div>			
		</div>		
	</body>
<html>