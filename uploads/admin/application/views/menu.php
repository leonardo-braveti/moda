	<h4><p>Gerenciamento</p></h4>	
	<div class="list-group active">
		<a href="<?php echo base_url("/index.php/cadastrar/home"); ?>" class="list-group-item">Início</a>
		<a href="<?php echo base_url("/index.php/cadastrar/marca"); ?>" class="list-group-item">Marca</a>		
		<a href="<?php echo base_url("/index.php/cadastrar/endereco"); ?>" class="list-group-item">Endereços</a>
		<a href="<?php echo base_url("/index.php/cadastrar/conteudo"); ?>" class="list-group-item">Conteúdo</a>		
		<a href="<?php echo base_url("/index.php/cadastrar/produtos"); ?>" class="list-group-item">Produtos</a>					
		<a href="<?php echo base_url("/index.php/cadastrar/layout_menu"); ?>" class="list-group-item">Menu Principal</a>					
		<a href="<?php echo base_url("/index.php/cadastrar/menu_secundario"); ?>" class="list-group-item">Menu Secundario</a>							
		<a href="<?php echo base_url("/index.php/cadastrar/reservado"); ?>" class="list-group-item">Endereços Reservados</a>
		<a href="<?php echo base_url("/index.php/cadastrar/usuarios"); ?>" class="list-group-item">Usuários</a>
		<a href="<?php echo base_url("/index.php/cadastrar/mensagem"); ?>" class="list-group-item">Mensagens</a>					
		<br><br>
		<a href="<?php echo base_url("/index.php/cadastrar/configurar"); ?>" class="list-group-item">Configurar Template Natura</a>
	</div>			
	<form method="get" action="<?php echo base_url("/index.php/sair/logout"); ?>">
		<button id="sair" class="btn btn-danger">Sair</button>
	</form>
	
	<?php
		//include_once($_SERVER["DOCUMENT_ROOT"]."/cat004/admin/config_inicial.php"); 
	?>
	
	<iframe src="http://www.feiraomodario.com.br/catalogoNoticias/banner/index.php" id="bnoticia" name="bnoticia" width="180" marginwidth="0" height="400" marginheight="," align="middle" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
	
	<div id="rodape">		
		<a href ="http://www.modanaweb.com.br"  target="_blank" >Moda Na Web </a>		
		<br>
		<a href ="http://www.braveti.com.br"  target="_blank" >Brave IT Solutions</a>
	</div>