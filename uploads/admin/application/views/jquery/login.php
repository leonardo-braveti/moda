<script>
$(document).ready(function(){
	$("#txt_erro").hide();
		
	$("#entrar").click(function(){
		var e = $("#email").val();
		var s = $("#senha").val();
		if(e == "" || s == ""){
			$("#txt_erro").text("POR FAVOR, INFORME LOGIN E SENHA");						
			$("#txt_erro").show();						
			return false;
		}		
		else{
			var base_url = '<?php echo base_url();?>'; 						
			ret = false;
			$.ajax({								
				type: "POST",
				url: base_url + '/index.php/logar',	
				async: false,	
				data: {
					email : e,
					senha : s	
			    }
			})
					.done(function(data){							
						if(data == "false"){									
							$("#txt_erro").text("LOGIN E/OU SENHA INVÁLIDOS");						
							$("#txt_erro").show();						
							ret = false;									
						}
						else{								
							ret =  true;									
						}
					});		
			
			return ret;	
		}							
	});
			
});
</script>