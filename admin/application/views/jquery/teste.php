<script>
			$(document).ready(function(){	
				$("#up_usuarios").hide();
				$("#new_usuarios").hide();				
				$("#novo_usuario").on('click', function(){
					$("#up_usuarios").hide();
					$("#new_usuarios").show();					
				});
				
				$("tr").on('click', function(){
					var id = "#"+this.id;
					var idenuser = $(id+" td:nth-child(1)").text();
					var nome = $(id+" td:nth-child(2)").text();
					var email = $(id+" td:nth-child(3)").text();					
					
					email = $.trim(email);
					
					email = email.split("@");
					
					$("#anome").val($.trim(nome));
					$("#aemail").val(email[0]);
					$("#oculto").val($.trim(idenuser));
					
					$("#new_usuarios").hide();
					$("#up_usuarios").show();					
				});
				
				$("#new_usuarios").on('submit', function(){										
					var nome = $("#nnome").val();					
					var email = $("#nemail").val();				
					email = email+"@modanaweb.com.br";					
					var senha = $("#nsenha").val();					
					if(nome == "" || email == "" || senha == ""){
						alert("Todos os campos são obrigatórios");
						return false;
					}
					else{
						var base_url = '<?php echo base_url();?>'; 						
						ret = false;
						$.ajax({								
							type: "POST",
							url: base_url + '/index.php/ajax/email_teste',	
							async: false,	
							data: {teste : email}
						})
							.done(function(data){							
								if(data == "false"){									
									alert("Este email já está cadastrado no sistema!");									
									ret = false;									
								}
								else{																			
									ret =  true;									
								}
							});							
						return ret;	
					}
				});
				
				$("#up_usuarios").on('submit', function(){																				
					var senha = $("#asenha").val();							
					
					if(senha == ""){
						alert("Todos os campos são obrigatórios");
						return false;
					}
					else
						return true;					
				});					
				$("#conteudo a").on('click', function(){					
					var r = confirm("Deseja realmente excluir este usuario?");
					if(r == true)
						return true;
					else
						return false;
				});
			});
</script>