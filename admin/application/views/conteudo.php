<html>
	<head>
		<?php include "imports.php"; ?> 		
		<?php include "jquery/marca.php"; ?>	
		<link rel="stylesheet" href="<?php echo base_url("css/home.css") ?>">	
		<link rel="stylesheet" href="<?php echo base_url("css/conteudo.css") ?>">	
		<title>::: Adminstração - Moda Na Web</title>	
		<script>
		$(function(){	
			$( "#cordeon" ).accordion({
				collapsible: true,
				active: false,
				heightStyle: "content"
			});
		});
	</script>

			
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
					<p id="letreiro">Conteúdo dos Templates</p>
				</div>	
				
				
				<?php 					
					echo form_open_multipart("cadastrar/registrar_conteudo");						
				?>				
						<div id="cordeon">
							<h3><?php echo utf8_encode($layout_menu["opc1"]); ?> </h3>							
							<div> <!-- inicio inicial -->
								<?php
									echo form_label("Titulo 1","titulo1");
									echo form_input(array(
										"name" => "titulo1",
										"id" => "titulo1",
										"class" => "form-control",
										"value" => $conteudo["titulo1"]								
									));						
									echo "<br>";
									
									echo form_label("Paragrafo 1","paragrafo1");
									echo form_textarea(array(
										"name" => "paragrafo1",
										"id" => "paragrafo1",
										"class" => "form-control",
										"value" => $conteudo["paragrafo1"]
									));													
									echo "<br>";
									
									echo form_label("Imagem 1","imagem1");
									echo form_upload(array(
										"name" => "imagem1",
										"id" => "imagem1"								
									));			
									echo "<font color=red  <p style='font-weight:bold'> Para trocar a imagem, basta selecionar outro arquivo. (1920 x 1080)</p> </font>";
									echo "<br>";
									
									echo form_label("Titulo 2","titulo2");
									echo form_input(array(
										"name" => "titulo2",
										"id" => "titulo2",
										"class" => "form-control",
										"value" => $conteudo["titulo2"]
									));															
									echo "<br>";
							
									echo form_label("Paragrafo 2","paragrafo2");
									echo form_textarea(array(
										"name" => "paragrafo2",
										"id" => "paragrafo2",
										"class" => "form-control",
										"value" => $conteudo["paragrafo2"]
									));													
									echo "<br>";
									
									echo form_label("Imagem 2","imagem2");
									echo form_upload(array(
										"name" => "imagem2",
										"id" => "imagem2"								
									));											
									echo "<font color=red  <p style='font-weight:bold'> Para trocar a imagem, basta selecionar outro arquivo. (1920 x 1080)</p> </font>";
									echo "<br>";
							
									echo form_label("Titulo 3","titulo3");
									echo form_input(array(
										"name" => "titulo3",
										"id" => "titulo3",
										"class" => "form-control",
										"value" => $conteudo["titulo3"]
									));						
									echo "<br>";
									echo form_label("Paragrafo 3","paragrafo3");
									
									echo form_textarea(array(
										"name" => "paragrafo3",
										"id" => "paragrafo3",
										"class" => "form-control",
										"value" => $conteudo["paragrafo3"]
									));													
									echo "<br>";
							
									echo form_label("Imagem 3","imagem3");
									echo form_upload(array(
										"name" => "imagem3",
										"id" => "imagem3"								
									));				
									echo "<font color=red  <p style='font-weight:bold'> Para trocar a imagem, basta selecionar outro arquivo. (1920 x 1080)</p> </font>";
									echo "<br>";
							
									echo form_label("Titulo Barra Preta","titbarrapreta");
									echo form_input(array(
										"name" => "titbarrapreta",
										"id" => "titbarrapreta",
										"class" => "form-control",
										"value" => $conteudo["titbarrapreta"]
									));						
									echo "<br>";
							
									echo form_label("Texto Barra Preta","texbarrapreta");
									echo form_textarea(array(
										"name" => "texbarrapreta",
										"id" => "texbarrapreta",
										"class" => "form-control",
										"value" => $conteudo["texbarrapreta"]
									));									
								?>								
							</div> <!-- fim inicial -->
						
							<h3><?php echo utf8_encode($layout_menu["opc2"]); ?> </h3>							
							<div>
								<?php
									echo form_label("Titulo ","titulo4");
									echo form_input(array(
										"name" => "titulo4",
										"id" => "titulo4",
										"class" => "form-control",
										"value" => $conteudo["titulo4"]
									));															
									echo "<br>";
								
									echo form_label("Imagem 1","imagem4");
									echo form_upload(array(
										"name" => "imagem4",
										"id" => "imagem4"								
									));				
									echo "<font color=red  <p style='font-weight:bold'> Para trocar a imagem, basta selecionar outro arquivo. (900 x 300)</p> </font>";				echo "<br>";
								
									echo form_label("Imagem 2","imagem5");
									echo form_upload(array(
										"name" => "imagem5",
										"id" => "imagem5"								
									));				
									echo "<font color=red  <p style='font-weight:bold'> Para trocar a imagem, basta selecionar outro arquivo. (900 x 300)</p> </font>";
									echo "<br>";
									
									echo form_label("Imagem 3","imagem6");
									echo form_upload(array(
										"name" => "imagem6",
										"id" => "imagem6"								
									));				
									echo "<font color=red  <p style='font-weight:bold'> Para trocar a imagem, basta selecionar outro arquivo. (900 x 300)</p> </font>";
									echo "<br>";
									
									echo form_label("Frase","frased1");									
									echo form_input(array(
										"name" => "frase1",
										"id" => "frased1",
										"class" => "form-control",
										"value" => $conteudo["frase1"]
									));
									echo "<br>";							
									
									echo form_label("Imagem 1","imagem7");
									echo form_upload(array(
										"name" => "imagem7",
										"id" => "imagem7"								
									));				
									echo "<font color=red  <p style='font-weight:bold'> Para trocar a imagem, basta selecionar outro arquivo. (180 x 60)</p> </font>";				
									echo "<br>";							
							
									
									echo form_label("Imagem 2","imagem8");
									echo form_upload(array(
										"name" => "imagem8",
										"id" => "imagem8"								
									));				
									echo "<font color=red  <p style='font-weight:bold'> Para trocar a imagem, basta selecionar outro arquivo. (180 x 60)</p> </font>";			
									echo "<br>";							
							
									echo form_label("Imagem 3","imagem9");
									echo form_upload(array(
										"name" => "imagem9",
										"id" => "imagem9"								
									));				
									echo "<font color=red  <p style='font-weight:bold'> Para trocar a imagem, basta selecionar outro arquivo. (180 x 60)</p> </font>";			
									echo "<br>";							
							
									echo form_label("Imagem 4","imagem10");
									echo form_upload(array(
										"name" => "imagem10",
										"id" => "imagem10"								
									));				
									echo "<font color=red  <p style='font-weight:bold'> Para trocar a imagem, basta selecionar outro arquivo. (180 x 60)</p> </font>";
									echo "<br>";														
								?>						
							</div> <!-- fim da empresa -->
							
							
							<h3><?php echo utf8_encode($layout_menu["opc4"]); ?> </h3>									
							<div> <!-- inicio reveder -->
								<?php									
									echo form_label("Frase","frase2");
									echo form_input(array(
										"name" => "frase2",
										"id" => "frasef2",
										"class" => "form-control",
										"value" => $conteudo["frase2"]
									));																				
									echo "<br>";			
							
									echo form_label("Titulo 1","titulo5");
									echo form_input(array(
										"name" => "titulo5",
										"id" => "titulo5",
										"class" => "form-control",
										"value" => $conteudo["titulo5"]
									));						
									echo "<br>";
									echo form_label("Paragrafo 1","paragrafo4");
									echo form_textarea(array(
										"name" => "paragrafo4",
										"id" => "paragrafo4",
										"class" => "form-control meu_tamanho",
										"value" => $conteudo["paragrafo4"]
									));						
									echo "<br>";
									echo form_label("Imagem 1","imagem11");
									echo form_upload(array(
										"name" => "imagem11",
										"id" => "imagem11"								
									));				
									echo "<font color=red  <p style='font-weight:bold'> Para trocar a imagem, basta selecionar outro arquivo. Template 1 ::: (76 x 76) - Template 2 ::: (287 x 197) </p> </font>";			
									echo "<br>";			
							
									echo form_label("Titulo 2","titulo6");
									echo form_input(array(
										"name" => "titulo6",
										"id" => "titulo6",
										"class" => "form-control",
										"value" => $conteudo["titulo6"]
									));						
									echo "<br>";
									echo form_label("Paragrafo 2","paragrafo5");
									
									echo form_textarea(array(
										"name" => "paragrafo5",
										"id" => "paragrafo5",
										"class" => "form-control meu_tamanho",
										"value" => $conteudo["paragrafo5"]
									));						
									echo "<br>";
							
									echo form_label("Imagem 2","imagem12");
									echo form_upload(array(
										"name" => "imagem12",
										"id" => "imagem12"								
									));				
									echo "<font color=red  <p style='font-weight:bold'> Para trocar a imagem, basta selecionar outro arquivo. Template 1 ::: (76 x 76) - Template 2 ::: (287 x 197) </p> </font>";			
									echo "<br>";			
									
									echo form_label("Titulo 3","titulo7");
									echo form_input(array(
										"name" => "titulo7",
										"id" => "titulo7",
										"class" => "form-control",
										"value" => $conteudo["titulo7"]
									));						
									echo "<br>";
									echo form_label("Paragrafo 3","paragrafo6");
							
									echo form_textarea(array(
										"name" => "paragrafo6",
										"id" => "paragrafo6",
										"class" => "form-control meu_tamanho",
										"value" => $conteudo["paragrafo6"]
									));						
									echo "<br>";
									echo form_label("Imagem 3","imagem13");
									echo form_upload(array(
										"name" => "imagem13",
										"id" => "imagem13"								
									));				
									echo "<font color=red  <p style='font-weight:bold'> Para trocar a imagem, basta selecionar outro arquivo. Template 1 ::: (76 x 76) - Template 2 ::: (287 x 197) </p> </font>";			
									echo "<br>";			
									
									echo form_label("Titulo 4","titulo8");
									echo form_input(array(
										"name" => "titulo8",
										"id" => "titulo7",
										"class" => "form-control",
										"value" => $conteudo["titulo8"]
									));						
									echo "<br>";
									
									echo form_label("Paragrafo 4","paragrafo7");
									echo form_textarea(array(
										"name" => "paragrafo7",
										"id" => "paragrafo7",
										"class" => "form-control meu_tamanho",
										"value" => $conteudo["paragrafo7"]
									));						
							
									echo "<br>";
									echo form_label("Imagem 4","imagem14");
									echo form_upload(array(
										"name" => "imagem14",
										"id" => "imagem14"								
									));				
									echo "<font color=red  <p style='font-weight:bold'> Para trocar a imagem, basta selecionar outro arquivo. Template 1 ::: (76 x 76) - Template 2 ::: (287 x 197) </p> </font>";			
									echo "<br>";			
									
									echo form_label("Titulo 5","titulo9");
										echo form_input(array(
										"name" => "titulo9",
										"id" => "titulo9",
										"class" => "form-control",
										"value" => $conteudo["titulo9"]
									));						
									echo "<br>";
									
									echo form_label("Paragrafo 5","paragrafo8");
										echo form_textarea(array(
										"name" => "paragrafo8",
										"id" => "paragrafo8",
										"class" => "form-control meu_tamanho",
										"value" => $conteudo["paragrafo8"]
									));						
									echo "<br>";
							
									echo form_label("Imagem 5","imagem15");
									echo form_upload(array(
										"name" => "imagem15",
										"id" => "imagem15"								
									));											
									echo "<font color=red  <p style='font-weight:bold'> Para trocar a imagem, basta selecionar outro arquivo. Template 1 ::: (76 x 76) - Template 2 ::: (287 x 197) </p> </font>";			
									echo "<br>";			
							
									echo form_label("Titulo 6","titulo10");
									echo form_input(array(
										"name" => "titulo10",
										"id" => "titulo10",
										"class" => "form-control",
										"value" => $conteudo["titulo10"]
									));						
									echo "<br>";
									
									echo form_label("Paragrafo 6","paragrafo9");
									echo form_textarea(array(
										"name" => "paragrafo9",
										"id" => "paragrafo9",
										"class" => "form-control meu_tamanho",
										"value" => $conteudo["paragrafo9"]
									));						
									echo "<br>";
							
									echo form_label("Imagem 6","imagem16");
									echo form_upload(array(
										"name" => "imagem16",
										"id" => "imagem16"								
									));				
									echo "<font color=red  <p style='font-weight:bold'> Para trocar a imagem, basta selecionar outro arquivo. Template 1 ::: (76 x 76) - Template 2 ::: (287 x 197) </p> </font>";			
								?>							
							</div> <!-- fim revender -->
							
							<h3> Videos Institucionais</h3>							
							<div> <!-- inicio video -->
								<?php									
									echo form_label("Texto Curto <span class = nvideo>1</span>","video_curto1");
									echo form_input(array(
										"name" => "video_curto1",
										"id" => "video_curto1",
										"class" => "form-control",
										"value" => $conteudo["video_curto1"]
									));						
									echo "<br>";			
									
									echo form_label("Texto Longo <span class = nvideo>1</span>","video_longo1");
									echo form_input(array(
										"name" => "video_longo1",
										"id" => "video_longo1",
										"class" => "form-control",
										"value" => $conteudo["video_longo1"]
									));						
									echo "<br>";			
									
									echo form_label("URL do Video <span class = nvideo>1</span>","video_url1");
									echo form_input(array(
										"name" => "video_url1",
										"id" => "video_url1",
										"class" => "form-control",
										"value" => $conteudo["video_url1"]
									));						
									
									echo "<br><br><br>";			
									
									echo form_label("Texto Curto <span class = nvideo>2</span>","video_curto2");
									echo form_input(array(
										"name" => "video_curto2",
										"id" => "video_curto2",
										"class" => "form-control",
										"value" => $conteudo["video_curto2"]
									));															
									echo "<br>";			
									
									echo form_label("Texto Longo <span class = nvideo>2</span>","video_longo2");
									echo form_input(array(
										"name" => "video_longo2",
										"id" => "video_longo2",
										"class" => "form-control",
										"value" => $conteudo["video_longo2"]
									));			
									echo "<br>";			
									
									echo form_label("URL do Video <span class = nvideo>2</span>","video_url");
									echo form_input(array(
										"name" => "video_url2",
										"id" => "video_url2",
										"class" => "form-control",
										"value" => $conteudo["video_url2"]
									));			
									
									echo "<br><br><br>";										
									
									echo form_label("Texto Curto <span class = nvideo>3</span>","video_curto3");
									echo form_input(array(
										"name" => "video_curto3",
										"id" => "video_curto3",
										"class" => "form-control",
										"value" => $conteudo["video_curto3"]
									));			
									echo "<br>";			
									
									echo form_label("Texto Longo <span class = nvideo>3</span>","video_longo3");
									echo form_input(array(
										"name" => "video_longo3",
										"id" => "video_longo3",
										"class" => "form-control",
										"value" => $conteudo["video_longo3"]
									));			
									echo "<br>";			
									
									echo form_label("URL do Video <span class = nvideo>3</span>","video_url3");
									echo form_input(array(
										"name" => "video_url3",
										"id" => "video_url3",
										"class" => "form-control",
										"value" => $conteudo["video_url3"]
									));			
									echo "<br>";
								?>	
							</div> <!-- fim video -->
							
							<h3>Testemunhos</h3>							
							<div> <!-- inicio testemunhos -->
								<?php									
									echo form_label("Texto <span class = nvideo>1</span>","testemunho1");
									echo form_textarea(array(
										"name" => "testemunho1",
										"id" => "testemunho1",
										"class" => "form-control meu_tamanho",
										"value" => $conteudo["testemunho1"]
									));						
									echo "<br>";
									
									echo form_label("Autoria <span class = nvideo>1</span>","autoria1");
									echo form_input(array(
										"name" => "autoria1",
										"id" => "autoria1",
										"class" => "form-control",
										"value" => $conteudo["autoria1"]
									));						
									
									echo "<br><br><br>";
									//1
							
									echo form_label("Texto <span class = nvideo>2</span>","testemunho2");
									echo form_textarea(array(
										"name" => "testemunho2",
										"id" => "testemunho2",
										"class" => "form-control meu_tamanho",
										"value" => $conteudo["testemunho2"]
									));						
									echo "<br>";
									
									echo form_label("Autoria <span class = nvideo>2</span>","autoria2");
									echo form_input(array(
										"name" => "autoria2",
										"id" => "autoria2",
										"class" => "form-control",
										"value" => $conteudo["autoria2"]
									));
									
									echo "<br><br><br>";
									//2
							
									echo form_label("Texto <span class = nvideo>3</span>","testemunho3");
									echo form_textarea(array(
										"name" => "testemunho3",
										"id" => "testemunho3",
										"class" => "form-control meu_tamanho",
										"value" => $conteudo["testemunho3"]
									));						
									echo "<br>";
									
									echo form_label("Autoria <span class = nvideo>3</span>","autoria3");
									echo form_input(array(
										"name" => "autoria3",
										"id" => "autoria3",
										"class" => "form-control",
										"value" => $conteudo["autoria3"]
									));
									
									
									echo "<br><br><br>";
									//3
							
							
									echo form_label("Texto <span class = nvideo>4</span>","testemunho4");
									echo form_textarea(array(
										"name" => "testemunho4",
										"id" => "testemunho4",
										"class" => "form-control meu_tamanho",
										"value" => $conteudo["testemunho4"]
									));						
									echo "<br>";
									
									echo form_label("Autoria <span class = nvideo>4</span>","autoria4");
									echo form_input(array(
										"name" => "autoria4",
										"id" => "autoria4",
										"class" => "form-control",
										"value" => $conteudo["autoria4"]
									));									
									
									
									echo "<br><br><br>";
									//4
							
									echo form_label("Texto <span class = nvideo>5</span>","testemunho5");
									echo form_textarea(array(
										"name" => "testemunho5",
										"id" => "testemunho5",
										"class" => "form-control meu_tamanho",
										"value" => $conteudo["testemunho5"]
									));						
									echo "<br>";
									
									echo form_label("Autoria <span class = nvideo>5</span>","autoria5");
									echo form_input(array(
										"name" => "autoria5",
										"id" => "autoria5",
										"class" => "form-control",
										"value" => $conteudo["autoria5"]
									));
								?>
							</div> <!-- fim testemunhos -->
						</div> <!-- fim do acordeon -->
									
						<br>
						
						<?PHP
							echo form_button(array(
								"content" => "Registrar",
								"class" => "btn btn-primary",
								"name" => "registrar",
								"id" => "registrar",
								"type" => "submit"
								
							));
							echo form_close();						
						?>
			</div>			
		</div>		
	</body>
<html>