<script>
			$(document).ready(function(){	
				$("#new_produto").hide();
				$("#up_produto").hide();
				$("#foto_upd").hide();				
				
				$(".novo_produto").on("click", function(){
					$("#new_produto").show();
					$("#up_produto").hide();
					$("#foto_upd").hide();				
				});
				
				
				$("tr").on('click', function(){
					$("#new_produto").hide();
					$("#up_produto").show();
					$("#foto_upd").show();				
					
					
					var id = "#"+this.id;					
					
					var photo = $(id+" td:first-child img" ).attr("src");					
					
					var ident = $(id+" td:nth-child(2)").text();																 
					var data = $(id+" td:nth-child(3)").text();
					var titulo = $(id+" td:nth-child(4)").text();					
					var pagina = $(id+" td:nth-child(5)").text();
					var posicao = $(id+" td:nth-child(6)").text();					
					var colecao = $(id+" td:nth-child(7)").text();
					var referencia = $(id+" td:nth-child(8)").text();					
					var preco = $(id+" td:nth-child(9)").text();
					var descricao = $(id+" td:nth-child(10)").text();															
					
					
					$("#foto_upd").attr("src", photo);
					$("#atitulo").val($.trim(titulo));					
					$("#pagebefore").text($.trim(pagina));
					//$("#form2 select option[value="+pagina+"]").attr("selected", true);						
					$("#aposicao ").val($.trim(posicao));
					$("#acolecao").val($.trim(colecao));
					$("#areferencia").val($.trim(referencia));
					$pp = preco.split(" ");
					$("#apreco").val($.trim($pp[1]));
					$("#adescricao").val($.trim(descricao));
					$("#oculto").val($.trim(ident));
					
				});
				
				$("#conteudo #excluir").on('click', function(){					
					var r = confirm("Deseja realmente excluir este produto?");
					if(r == true)
						return true;
					else
						return false;
				});
			});
</script>