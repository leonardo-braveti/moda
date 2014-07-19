<?php 	
	$def =  $this->session->userdata("usuario"); 		
	$emp =  $this->session->userdata("empresa"); 	
	
	$this->session->userdata("banco");
	
	
	if(count($def)<2)
		redirect("/");
		
	if($this->session->userdata("banco") != $this->db->database){
		redirect("/");
		unset($this->session->userdata);
				
	}
		
	if(count($emp)==0)
		$emp["marca"] = "";	
?>
		
					<div id="topo_esq_home">
						<p id="adm"> Administração - <b><font color="red" ><?php echo $emp["marca"]; ?></b></font></p>
						<img src ="<?php echo base_url("img/logo.png") ?>">
						<p id="data"><b><?php echo @date("d/m/Y") ?></b></p>				
					</div>
					
					
					<?php
						//include_once($_SERVER["DOCUMENT_ROOT"]."/cat004/admin/config_inicial.php"); 
						//include_once(base_url("config_inicial.php"))
					?>
					<div id="topo_centro">						
						<iframe src="http://www.modanaweb.com.br/catalogoNoticias/noticia.htm" name="principal" width="100%" marginwidth="0" height="100%" marginheight="," align="middle" scrolling="auto" frameborder="0" allowtransparency="true"></iframe>					
					</div>
					
					<div id="topo_dir_home">
						<p id="frase1"> Sistema Administrativo </p>
						<p id="frase2"> Catalogo Virtual Moda na Web </p>				
						<p id="frase3"> Versão 5.0 </p>								
					</div>

<br><br>
<p id="boas_vindas"> Olá, <b><font color="green" ><?php echo $def["nomeUser"];  ?></b></font></p>
