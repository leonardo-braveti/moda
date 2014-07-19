<?php 						
	$emp =  $this->session->userdata("empresa"); 						
	if(count($emp)==0)
		$emp["marca"] = "";
?>
			<br>			
				<div>
					<div id="topo_esq_home">
						<p id="adm"> Administração - <b><font color="red" ><?php echo $emp["marca"]; ?></b></font></p>
						<img src ="<?php echo base_url("img/logo.png") ?>">
						<p id="data"><b><?php echo @date("d/m/Y") ?></b></p>				
					</div>
					
					<div id="topo_dir_home">
						<p id="frase1"> Sistema Administrativo </p>
						<p id="frase2"> Catalogo Virtual Moda na Web </p>				
						<p id="frase3"> Versão 5.0 </p>								
					</div>
					
					<br><br><br>
				</div>	