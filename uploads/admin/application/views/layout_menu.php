<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
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
				<?php include "menu.php"; ?>	
			</div>						
			<div id="conteudo">		
				<div id = "instrucoes">
					<p id="letreiro">Menu do Layout</p>				
				</div>	
				<?php					
					if (count($layout_menu) > 0 ){
				?>									
						<form action="<?php echo base_url('/index.php/cadastrar/atualizar_layout_menu'); ?>" method="post">
							<label for="aopc1">Opção 1</label>
							<input type="text" name="aopc1" id="aopc1" class="form-control" value="<?php echo $layout_menu["opc1"]; ?>"> 
							<br>
							
							<label for="aopc1">Opção 2</label>
							<input type="text" name="aopc2" id="aopc2" class="form-control" value="<?php echo $layout_menu["opc2"]; ?>">
							<br>
						
							<label for="aopc1">Opção 3</label>
							<input type="text" name="aopc3" id="aopc3" class="form-control" value="<?php echo $layout_menu["opc3"]; ?>"> 	
							<br>
						
							<label for="aopc1">Opção 4</label>
							<input type="text" name="aopc4" id="aopc4" class="form-control" value="<?php echo $layout_menu["opc4"]; ?>">
							<br> 													
							
							<label for="aopc1">Opção 5</label>
							<input type="text" name="aopc5" id="aopc5" class="form-control" value="<?php echo $layout_menu["opc5"]; ?>">
							<br>
						
							<label for="aopc1">Opção 6</label>
							<input type="text" name="aopc6" id="aopc6" class="form-control" value="<?php echo $layout_menu["opc6"]; ?>">
							<br>
								
							<input type="submit" id="up_lay_menu" value="Atualizar" class="btn btn-primary" >	
						</form>																				
					<?php
						}	
						else{
					?>
							<form action="cadastrar/salvar_layout_menu" method="post">
							<label for="aopc1">Opção 1</label>
							<input type="text" name="sopc1" id="sopc1" class="form-control"> 
							<br>
							
							<label for="aopc1">Opção 2</label>
							<input type="text" name="sopc2" id="sopc2" class="form-control">
							<br>
						
							<label for="aopc1">Opção 3</label>
							<input type="text" name="sopc3" id="sopc3" class="form-control"> 	
							<br>
						
							<label for="aopc1">Opção 4</label>
							<input type="text" name="sopc4" id="sopc4" class="form-control">
							<br> 													
							
							<label for="aopc1">Opção 5</label>
							<input type="text" name="sopc5" id="sopc5" class="form-control">
							<br>
						
							<label for="aopc1">Opção 6</label>
							<input type="text" name="sopc6" id="sopc6" class="form-control">
							<br>
								
							<input type="submit" id="sv_lay_menu" value="Salvar" class="btn btn-primary">	
						<form>	
					<?php
						}	
					?>
			</div>			
		</div>		
	</body>
<html>