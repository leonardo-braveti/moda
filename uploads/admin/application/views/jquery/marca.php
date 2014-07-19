<script>	
	$(document).ready(function(){	
		var noend = 1;
		$("#new_address").hide();
		
		$("#novo_endereco").click(function(){		
			$("#new_address").show();
			return false;
		});
		
		$("#rem_address").click(function(){
			$("#new_address").hide();			
			return false;
		});
		
		var def_tipo = "<?php echo $empr["tipo"]; ?>";
		if(def_tipo=="rand")
			$("#rand").prop('checked', true);
		else
			$("#seq").prop('checked', true);
	});	
</script>
