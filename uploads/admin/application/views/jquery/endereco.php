<script>
			$(document).ready(function(){	
			
				$( ".cordeon" ).accordion({
					collapsible: true,
					active: false,
					heightStyle: "content"
				});
				
				
				$("#prim").click(function(){						
					$("#descritor").val("<?php echo $principal['descricao']; ?>");
					$("#logradouro").val("<?php echo $principal['logradouro']; ?>");
					$("#bairro").val("<?php echo $principal['bairro']; ?>");
					$("#cidade").val("<?php echo $principal['cidade']; ?>");
					$("#estado").val("<?php echo $principal['estado']; ?>");
					$("#telefone1").val("<?php echo $principal['telefone1']; ?>");
					$("#telefone2").val("<?php echo $principal['telefone2']; ?>");
					$("#telefone3").val("<?php echo $principal['telefone3']; ?>");
					$("#oculto").val(1);					
				});
				
				$("#inclui_form_secundario").hide();
				
				$("#foto_endereco_secundaria").hide();
				
				$("#tbdados_secundario th:first-child").hide();
				$("#tbdados_secundario td:first-child").hide();
				
				$(".endereco_secundario").click(function(){					
					$("#inclui_form_secundario").show();					
				});
				
				
				$(".alterar").on('click', function(){										
					$("#inclui_form_secundario").show();		
					$("#foto_endereco_secundaria").show();
					
					var id = "#"+"linha"+$(this).attr("id");										
					var ident = $(id+" td:first-child").text();
					var descricao = $(id+" td:nth-child(2)").text();					
					var logradouro = $(id+" td:nth-child(3)").text();										
					var bairro = $(id+" td:nth-child(4)").text();					
					var cidade = $(id+" td:nth-child(5)").text();
					var estado = $(id+" td:nth-child(6)").text();					
					var telefone1 = $(id+" td:nth-child(7)").text();							
					var telefone2 = $(id+" td:nth-child(8)").text();				
					var telefone3 = $(id+" td:nth-child(9)").text();				
					
					$("#inclui_form_secundario #descritor").val($.trim(descricao));					
					$("#inclui_form_secundario #logradouro").val($.trim(logradouro));					
					$("#inclui_form_secundario #bairro").val($.trim(bairro));
					$("#inclui_form_secundario #cidade").val($.trim(cidade));
					$("#inclui_form_secundario #estado").val($.trim(estado));					
					$("#inclui_form_secundario #telefone1").val($.trim(telefone1));					
					$("#inclui_form_secundario #telefone2").val($.trim(telefone2));					
					$("#inclui_form_secundario #telefone3").val($.trim(telefone3));					
					$("#inclui_form_secundario #oculto").val($.trim(ident));
					
					var base_url = '<?php echo base_url();?>'; 						
					var local = base_url + '/index.php/cadastrar/json_endereco/'+ident;
					$.ajax({								
						type: "GET",
						url: local,
						dataType: "json"
					})
					.success(function(data){					
						
						var color = base_url+"/uploads/"+data.foto_colorida;
						var black = base_url+"/uploads/"+data.foto_preto_branco;
						
						$("#img_sec1").attr("src", color); 						
						$("#img_sec2").attr("src", black);
						
					})
					
					

				});
				
				$("#conteudo .excluir").on('click', function(){					
					var r = confirm("Deseja realmente excluir este endereço?");
					if(r == true)
						return true;
					else
						return false;
				});
			});
</script>