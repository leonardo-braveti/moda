
<?php
	include "config.php";	
	$con = @mysql_connect("localhost", $usuario, $senha);

	mysql_select_db($banco, $con);
	@mysql_set_charset('utf8',$con);
	
	$pre = "select distinct(pagina) as pagina from produto";
	$grupos = mysql_query($pre, $con);
	$pages = "";
	
	$x=0;
	
	while($l=mysql_fetch_assoc($grupos)){
		$pages[$x] = $l["pagina"];
		$x++;
	}

	
	$sql = array 
			(
				"menu" => "select * from menu",
				"empresa" => "select * from empresa" ,
				"enderecos" => "select * from endereco" ,
				"op1" => "select * from produto where pagina ='".$pages[0]."' order by posicao",
				"o2" =>  "select * from produto where pagina ='".$pages[1]."' order by posicao",
				"o3" =>  "select * from produto where pagina ='".$pages[2]."' order by posicao",
				"conteudo" => utf8_decode("select * from conteudo"),
				"configurar" => utf8_decode("select * from configurar"),
				"secundario" => utf8_decode("select * from menu_secundario"),				
				"links" => utf8_decode("select * from links"),
				"email" => utf8_decode("select email from empresa")
			);
			echo mysql_error();
			
			
	$dados = array 
			(
				"menu" => mysql_query($sql["menu"], $con),
				"empresa" => mysql_query($sql["empresa"], $con),
				"enderecos" => mysql_query($sql["enderecos"], $con),				
				"op1" => mysql_query($sql["op1"], $con),
				"o2" => mysql_query($sql["o2"], $con),
				"o3" => mysql_query($sql["o3"], $con),
				"conteudo" => mysql_query($sql["conteudo"], $con),
				"configurar" => mysql_query($sql["configurar"], $con),
				"secundario" => mysql_query($sql["secundario"], $con),
				"links" => mysql_query($sql["links"], $con),
				"email" => mysql_query($sql["email"], $con)
			);	
	
			
			
	$menu = mysql_fetch_assoc($dados["menu"]);		
	
	$empresa = mysql_fetch_assoc($dados["empresa"]);			// cada vez que eu chamo fetch eu busco a proxima linha
	
	$conteudo = mysql_fetch_assoc($dados["conteudo"]);		
	
	$links = mysql_fetch_assoc($dados["links"]);		
	
	$total = mysql_num_rows($dados["enderecos"]);
		
	$config = mysql_fetch_assoc($dados["configurar"]);
	
	$secundario = mysql_fetch_assoc($dados["secundario"]);
	
	$email = mysql_fetch_assoc($dados["email"]);
	
	
	
	$x = 0;
	$eoutros[$x] = null;
	
	if($total >0){	
		while ($l = mysql_fetch_assoc($dados["enderecos"])){		
			$eoutros[$x] = $l;
			$x++;
		}
	}
	
	$x = 0;
	$album[$x] = 0;
	
	
	while($l = mysql_fetch_assoc($dados["op1"])){			
		$album[$x] = $l;		
		$x++;
	}
	
	while($l = mysql_fetch_assoc($dados["o2"])){		
		$album[$x] = $l;	
		$x++;
	}
		
	while($l = mysql_fetch_assoc($dados["o3"])){			
		$album[$x] = $l;	
		$x++;
	}
	
	if($empresa["tipo"] == "rand")
		shuffle($album);	
	
?>