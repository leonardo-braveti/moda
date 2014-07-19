$("document").ready(function(){
	var nome = $("#nome_form");
	var email = $("#email_form");	
	var ass = $("#assunto_form");
	var msg = $("#msg_form");
	
	var campos = new Array(nome,email,ass,msg);
	
	$("#envia_form").click(function(event){
		event.preventDefault();
		var condicao = true;
		$.each(campos,function(){			
			if($(this).val() == ""){
				$(this).siblings(".vazio").show();
				condicao = false;
				}
			else	
				$(this).siblings(".vazio").hide();
			
			
		});
		if(condicao == true){			
				$.ajax({								
					type: "POST",
					url: "recebe.php",						
					data: {
						n : nome.val(),
						e : email.val(),			
						m : msg.val(),
						a : ass.val()
					}
				})
				.done(function(data){							
					if(data == "true"){
						$(".efetuado").show();
						nome.val("");
						email.val("");
						msg.val("");
						ass.val("");
					}	
					else
						alert("mal");
				});
				
		}
		return condicao;
	});
	
	
});