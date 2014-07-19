<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	class Cadastrar extends CI_Controller{		
		public function home(){
			$this->load->model("empresa");			
			$empr = $this->empresa->carregarEmpresa();			
			$dados = array("empr" => $empr);					
			$this->load->view("home.php", $dados);			
		}
		
		public function marca(){
			$this->load->model("empresa");			
			$empr = $this->empresa->carregarEmpresa();			
			$dados = array("empr" => $empr);					
			$this->load->view("marca.php", $dados);
		}		
		
		public function registrar_marca(){					
			$this->load->model("empresa");			
			if($_FILES['logomarca']['name'] != null){
				$config['upload_path'] = "./uploads/";
				$config['allowed_types'] = 'gif|jpg|png';						 
				$config['file_name'] = utf8_decode($_FILES['logomarca']['name']);						 
				$config['file_name'] = sha1($config['file_name']);
				$config['max_size'] = 0;						
				$config['max_width'] = 0;			
				$config['max_heigth'] = 0;			
				$this->load->library('upload', $config);		
				$this->upload->do_upload("logomarca");											
				
				$dados = array(
					"id" => 1,					
					"marca" => $this->input->post("marca"),
					"logomarca" => $this->upload->file_name,
					"email" => $this->input->post("email")."@modanaweb.com.br",
					"dir_acesso" => "http://www.modanaweb.com.br/".$this->input->post("dir_acesso"),
					"tipo" => $this->input->post("tipo")
				);								
				if(!($this->input->post("marca") == "") || !($this->input->post("email") == "") || !($this->input->post("dir_acesso") == "") || !($this->input->post("tipo") == "")){
					$this->empresa->atualizar($dados);
					$this->session->set_userdata("empresa", $dados);
				}	
			}
			elseif($_FILES['banner']['name'] != null){
				$config['upload_path'] = "./uploads/";
				$config['allowed_types'] = 'gif|jpg|png';						 
				$config['file_name'] = utf8_decode($_FILES['banner']['name']);						 
				$config['file_name'] = sha1($config['file_name']);
				$config['max_size'] = 0;						
				$config['max_width'] = 0;			
				$config['max_heigth'] = 0;			
				$this->load->library('upload', $config);		
				$this->upload->do_upload("banner");											
				
				$dados = array(
					"id" => 1,					
					"marca" => $this->input->post("marca"),
					"banner" => $this->upload->file_name,
					"email" => $this->input->post("email")."@modanaweb.com.br",
					"dir_acesso" => "http://www.modanaweb.com.br/".$this->input->post("dir_acesso"),
					"tipo" => $this->input->post("tipo")
				);
				if(!($this->input->post("marca") == "") || !($this->input->post("email") == "") || !($this->input->post("dir_acesso") == "") || !($this->input->post("tipo") == "")){
					$this->empresa->atualizar($dados);
					$this->session->set_userdata("empresa", $dados);	
				}
			}
			else{
				$dados = array(
					"id" => 1,					
					"marca" => $this->input->post("marca"),					
					"email" => $this->input->post("email")."@modanaweb.com.br",					
					"dir_acesso" => "http://www.modanaweb.com.br/".$this->input->post("dir_acesso"),
					"tipo" => $this->input->post("tipo")
				);				
				if(!($this->input->post("marca") == "") || !($this->input->post("email") == "") || !($this->input->post("dir_acesso") == "") || !($this->input->post("tipo") == "")){
					$this->empresa->atualizar($dados);
					$this->session->set_userdata("empresa", $dados);		
				}
			}
			
			Cadastrar::marca();
		}
		
		public function endereco(){			
			$this->load->model("endereco");
			$principal = $this->endereco->carregarEnderecoPrincipal();			
			$secundario = $this->endereco->carregarEnderecos();			
			
			$this->load->model("links");
			$outros = $this->links->carregarDados();
			
			$dados = array("principal" => $principal, "secundario" => $secundario, "links" => $outros);						
			$this->load->view("endereco", $dados);
		}
		
		public function json_endereco($id){			
			$this->load->model("endereco");
			$res = $this->endereco->buscarPorId($id);					
			ob_end_clean();
			echo json_encode($res);
		}
		
		
		public function registrar_endereco(){
			$this->load->model("endereco");			
			
			$dados = array(
				"descricao" => $this->input->post("descritor"),
				"logradouro" => $this->input->post("logradouro"),
				"bairro" => $this->input->post("bairro"),
				"cidade" => $this->input->post("cidade"),
				"estado" => $this->input->post("estado"),
				"telefone1" => $this->input->post("telefone1"),
				"telefone2" => $this->input->post("telefone2"),
				"telefone3" => $this->input->post("telefone3"),
				
			);
			$teste = true;		
			if(($this->input->post("descritor") == "") || ($this->input->post("logradouro") == "") || ($this->input->post("bairro") == "") || ($this->input->post("cidade") == "") || ($this->input->post("estado") == ""))			
				$teste = false;
						
			$foto_colorida = null;						
			if(($_FILES['foto_colorida']['name']) != null){
				$foto_colorida = self::receber_imagem("foto_colorida", 0);				
				$dados["foto_colorida"] = $foto_colorida;
			}
			
			$foto_preto_branco = null;			
			if(($_FILES['foto_preto_branco']['name']) != null){
				$foto_preto_branco = self::receber_imagem("foto_preto_branco", 0);				
				$dados["foto_preto_branco"] = $foto_preto_branco;
			}
			
			$id = $this->input->post("oculto");
			
			if($id != ""){
				$dados["id"] = $id;
				if($teste)
					$this->endereco->atualizar($dados);			
			}
			else{
				if($teste)
					$this->endereco->salvar($dados);			
			}
			Cadastrar::endereco();
		}	
		
		public function atualizar_endereco(){				
			$this->load->model("endereco");
			if($_FILES['auserfile']['name'] != null){
				$config['upload_path'] = "./uploads/";
				$config['allowed_types'] = 'gif|jpg|png';						 
				$config['file_name'] = utf8_decode($_FILES['auserfile']['name']);						 
				$config['file_name'] = sha1($config['file_name']);
				$config['max_size'] = 0;						
				$config['max_width'] = 0;			
				$config['max_heigth'] = 0;			
				$this->load->library('upload', $config);		
				$this->upload->do_upload("auserfile");											
				
				$dados = array(
					"id" => $this->input->post("oculto"),
					"logradouro" => $this->input->post("logradouro1"),
					"bairro" => $this->input->post("bairro1"),
					"cidade" => $this->input->post("cidade1"),
					"estado" => $this->input->post("estado1"),
					"telefone1" => $this->input->post("telefone1"),
					"telefone2" => $this->input->post("telefone2"),
					"telefone3" => $this->input->post("telefone3"),
					"foto" => $this->upload->file_name,
					"rede1" => $this->input->post("arede1"),
					"rede2" => $this->input->post("arede2"),
					"rede3" => $this->input->post("arede3"),
					"rede4" => $this->input->post("arede4"),
					"rede5" => $this->input->post("arede5"),
					"url1" => $this->input->post("aurl1"),
					"url2" => $this->input->post("aurl2"),
					"url3" => $this->input->post("aurl3"),
					"email1" => $this->input->post("aemail1"),
					"email2" => $this->input->post("aemail2"),
					"whatsapp" => $this->input->post("awhatsapp")
				);		
				$teste = true;		
				if(($this->input->post("logradouro1") == "") || ($this->input->post("bairro1") == "") || ($this->input->post("cidade1") == "") || ($this->input->post("estado1")) == ""|| ($this->input->post("telefone11") == "") || ($this->input->post("telefone2") == "") || ($this->input->post("telefone3") == ""))			
					$teste = false;
			
				if($teste)
					$this->endereco->atualizar($dados);
			}
			else{
				$dados = array(
					"id" => $this->input->post("oculto"),
					"logradouro" => $this->input->post("logradouro1"),
					"bairro" => $this->input->post("bairro1"),
					"cidade" => $this->input->post("cidade1"),
					"estado" => $this->input->post("estado1"),
					"telefone1" => $this->input->post("telefone1"),
					"telefone2" => $this->input->post("telefone2"),
					"telefone3" => $this->input->post("telefone3"),
					"rede1" => $this->input->post("arede1"),
					"rede2" => $this->input->post("arede2"),
					"rede3" => $this->input->post("arede3"),
					"rede4" => $this->input->post("arede4"),
					"rede5" => $this->input->post("arede5"),
					"url1" => $this->input->post("aurl1"),
					"url2" => $this->input->post("aurl2"),
					"url3" => $this->input->post("aurl3"),
					"email1" => $this->input->post("aemail1"),
					"email2" => $this->input->post("aemail2"),
					"whatsapp" => $this->input->post("awhatsapp")
				);		
				$teste = true;		
				if(($this->input->post("logradouro1") == "") || ($this->input->post("bairro1") == "") || ($this->input->post("cidade1") == "") || ($this->input->post("estado1")) == ""|| ($this->input->post("telefone1") == "") || ($this->input->post("telefone2") == "") || ($this->input->post("telefone3") == ""))			
					$teste = false;
					
				if($teste)
					$this->endereco->atualizar($dados);					
				
			}
				Cadastrar::endereco();				
		}
		
		public function excluir_endereco($id){
			$this->load->model("endereco");
			$this->endereco->excluir($id);			
			Cadastrar::endereco();		
		}
		
		public function registrar_links(){
			$this->load->model("links");
			
			$dados = array(
				"rede1" => $this->input->post("rede1"),
				"rede2" => $this->input->post("rede2"),
				"rede3" => $this->input->post("rede3"),
				"rede4" => $this->input->post("rede4"),
				"rede5" => $this->input->post("rede5"),
				"url1" => $this->input->post("url1"),
				"url2" => $this->input->post("url2"),
				"url3" => $this->input->post("url3"),
				"email1" => $this->input->post("email1"),
				"email2" => $this->input->post("email2"),
				"whatsapp" => $this->input->post("whatsapp")
			);
			$teste = true;
			/*foreach($dados as $d=>$v){
				if($d == "")
					$teste = false;
			}*/
			if($teste)					
				$this->links->atualizar($dados);
			
			Cadastrar::endereco();
		}
		
		public function produtos(){
			$this->load->model("produto");
			$this->load->model("menu_secundario");
			$prods = $this->produto->carregarProdutos();
			$camposdomenu = $this->menu_secundario->carregar_dados();
			$dados = array("prods" => $prods, "camposdomenu" => $camposdomenu);			
			
			$this->load->view("produtos.php", $dados);
		}
		public function usuarios(){
			$this->load->model("usuario");			
			$users = $this->usuario->carregarUsuarios();
			$dados = array ("users"=> $users);					
			$this->load->view("usuarios.php", $dados);
		}
		
		public function salvar_usuarios(){
			$dados = array(
				"nomeUser" => $this->input->post("nnome"),
				"emailUser" => $this->input->post("nemail")."@modanaweb.com.br",
				"senhaUser" => $this->input->post("nsenha")			
			);
			$this->load->model("usuario");
			
			$teste = true;
			foreach($dados as $d=>$v){
				if($v == "")
					$teste = false;
			}
			if($teste)
				$this->usuario->salvar($dados);																	
			Cadastrar::usuarios();			
		}
		public function atualizar_usuarios(){			
			$dados = array(
				"nomeUser" => $this->input->post("anome"),
				"emailUser" => $this->input->post("aemail")."@modanaweb.com.br",
				"senhaUser" => $this->input->post("asenha"),			
				"idUser" => $this->input->post("oculto"),
			);
			$this->load->model("usuario");
			$teste = true;
			foreach($dados as $d=>$v){
				if($v == "")
					$teste = false;
			}
			if($teste)
				$this->usuario->atualizar($dados);																	
			Cadastrar::usuarios();			
		}
		
		public function excluir_usuario($id){
			$this->load->model("usuario");
			$this->usuario->excluir($id);			
			Cadastrar::usuarios();
		}
		public function salvar_produtos(){									
			$config['upload_path'] = "../uploads/";
			$config['allowed_types'] = 'gif|jpg|png';						 
			$config['file_name'] = utf8_decode($_FILES['userfile']['name']);						 
			$config['file_name'] = "/".sha1($config['file_name']);
			$config['max_size'] = 300;						
			$config['max_width'] = 0;			
			$config['max_heigth'] = 0;			
			$this->load->library('upload', $config);		
			$this->upload->do_upload("userfile");
			
			$dados = array(
					"data" => @date("Y-m-d"),
					"titulo" => $this->input->post("titulo"),
					"foto" => $this->upload->file_name,
					"pagina" => $this->input->post("pagina"),
					"posicao" => $this->input->post("posicao"),
					"colecao" => $this->input->post("colecao"),
					"referencia" => $this->input->post("referencia"),
					"preco" => str_replace("," , ".", $this->input->post("preco")),
					"descricao" => $this->input->post("descricao")
			);
			$this->load->model("produto");
			$this->produto->salvar($dados);
			Cadastrar::produtos();
		}
		public function atualizar_produtos(){				
			if($_FILES['auserfile']['name'] != null){
				$config['upload_path'] = "../uploads/";
				$config['allowed_types'] = 'gif|jpg|png';						 
				$config['file_name'] = utf8_decode($_FILES['auserfile']['name']);						 
				$config['file_name'] = "/".sha1($config['file_name']);
				$config['max_size'] = 0;						
				$config['max_width'] = 0;			
				$config['max_heigth'] = 0;			
				$this->load->library('upload', $config);		
				$this->upload->do_upload("auserfile");											
				$dados = array(
					"data" => @date("Y-m-d"),
					"id" => $this->input->post("oculto"),
					"titulo" => $this->input->post("atitulo"),					
					"foto" => $this->upload->file_name,
					"pagina" => $this->input->post("apagina"),
					"posicao" => $this->input->post("aposicao"),
					"colecao" => $this->input->post("acolecao"),
					"referencia" => $this->input->post("areferencia"),
					"preco" => str_replace("," , ".", $this->input->post("apreco")),
					"descricao" => $this->input->post("adescricao")
				);
				$this->load->model("produto");
				$teste = true;
				$this->produto->atualizar($dados);				
			}
			else{
				$dados = array(
					"data" => @date("Y-m-d"),
					"id" => $this->input->post("oculto"),
					"titulo" => $this->input->post("atitulo"),										
					"pagina" => $this->input->post("apagina"),
					"posicao" => $this->input->post("aposicao"),
					"colecao" => $this->input->post("acolecao"),
					"referencia" => $this->input->post("areferencia"),
					"preco" => str_replace("," , ".", $this->input->post("apreco")),
					"descricao" => $this->input->post("adescricao")
				);
				$this->load->model("produto");
				$this->produto->atualizar($dados);
			}			
			
			Cadastrar::produtos();
		}
		public function excluir_produto($id){			
			$this->load->model("produto");
			$this->produto->excluir($id);
			Cadastrar::produtos();
		}		
		public function layout_menu(){
			$this->load->model("menu");
			$m = $this->menu->carregarMenu();
			$dados = array ("layout_menu" => $m);			
			$this->load->view("layout_menu", $dados);
		}
		public function salvar_layout_menu(){
			$dados = array(
				"opc1" => $this->input->post("sopc1"),
				"opc2" => $this->input->post("sopc2"),
				"opc3" => $this->input->post("sopc3"),
				"opc4" => $this->input->post("sopc4"),
				"opc5" => $this->input->post("sopc5"),
				"opc6" => $this->input->post("sopc6")
			);			
			$this->load->model("menu");
			$teste = true;
			foreach($dados as $d=>$v){
				if($v == "")
					$teste = false;
			}
			if($teste)
				$this->menu->salvar($dados);
			Cadastrar::layout_menu();
		}
		public function atualizar_layout_menu(){
			$dados = array(
				"opc1" => $this->input->post("aopc1"),
				"opc2" => $this->input->post("aopc2"),
				"opc3" => $this->input->post("aopc3"),
				"opc4" => $this->input->post("aopc4"),
				"opc5" => $this->input->post("aopc5"),
				"opc6" => $this->input->post("aopc6")
			);			
			$this->load->model("menu");
			$teste = true;
			foreach($dados as $d=>$v){
			if($v == "")
				$teste = false;
			}
			if($teste)
				$this->menu->atualizar($dados);
			Cadastrar::layout_menu();
		}
		public function mensagem(){
			$this->load->model("mensagem");
			$msgs = $this->mensagem->carregarMensagens();
			$dados = array ("msg" => $msgs);
			$this->load->view("mensagens", $dados);
		}
	
		public function conteudo(){			
			$this->load->model("conteudo");
			$this->load->model("menu");						
			$dados = array("conteudo" => $this->conteudo->carregar_conteudo(), "layout_menu" => $this->menu->carregarMenu());			
			$this->load->view("conteudo", $dados);
			
		}
		
		public function registrar_conteudo(){			
	
			$this->load->model("conteudo");
			$x = $this->conteudo->possui_linha();			
			$dados = array(
				"titulo1" => $this->input->post("titulo1"),
				"paragrafo1" => $this->input->post("paragrafo1"),								
				"titulo2" => $this->input->post("titulo2"),
				"paragrafo2" => $this->input->post("paragrafo2"),					
				"titulo3" => $this->input->post("titulo3"),
				"paragrafo3" => $this->input->post("paragrafo3"),
				"titbarrapreta" => $this->input->post("titbarrapreta"),
				"texbarrapreta" => $this->input->post("texbarrapreta"),				
				"titulo4" => $this->input->post("titulo4"),
				"frase1" => $this->input->post("frase1"),
				"frase2" => $this->input->post("frase2"),
				"titulo5" => $this->input->post("titulo5"),
				"titulo6" => $this->input->post("titulo6"),
				"titulo7" => $this->input->post("titulo7"),
				"titulo8" => $this->input->post("titulo8"),
				"titulo9" => $this->input->post("titulo9"),
				"titulo10" => $this->input->post("titulo10"),
				"paragrafo4" => $this->input->post("paragrafo4"),
				"paragrafo5" => $this->input->post("paragrafo5"),
				"paragrafo6" => $this->input->post("paragrafo6"),
				"paragrafo7" => $this->input->post("paragrafo7"),
				"paragrafo8" => $this->input->post("paragrafo8"),
				"paragrafo9" => $this->input->post("paragrafo9"),				
				"testemunho1" => $this->input->post("testemunho1"),
				"autoria1" => $this->input->post("autoria1"),
				"testemunho2" => $this->input->post("testemunho2"),
				"autoria2" => $this->input->post("autoria2"),
				"testemunho3" => $this->input->post("testemunho3"),
				"autoria3" => $this->input->post("autoria3"),
				"testemunho4" => $this->input->post("testemunho4"),
				"autoria4" => $this->input->post("autoria4"),
				"testemunho5" => $this->input->post("testemunho5"),
				"autoria5" => $this->input->post("autoria5")
			);	
			$teste = true;
			foreach($dados as $d=>$v){
				if($v == "")
					$teste = false;
			}

			
			
			$dados["video_curto1"] = $this->input->post("video_curto1");
			$dados["video_curto3"] = $this->input->post("video_curto2");
			$dados["video_curto2"] = $this->input->post("video_curto3");
			$dados["video_longo1"] = $this->input->post("video_longo1");
			$dados["video_longo3"] = $this->input->post("video_longo2");
			$dados["video_longo2"] = $this->input->post("video_longo3");
			$dados["video_url1"] = $this->input->post("video_url1");
			$dados["video_url3"] = $this->input->post("video_url2");
			$dados["video_url2"] = $this->input->post("video_url3");
			$dados["formato_video1"] = $this->input->post("formato_video1");
			$dados["formato_video2"] = $this->input->post("formato_video2");
			$dados["formato_video3"] = $this->input->post("formato_video3");
			
						
			if($x > 0){			
				if($teste)
					$this->conteudo->atualizar_conteudo($dados);
			}
			else{	
				if($teste)
					$this->conteudo->salvar_conteudo($dados);
			}
				
			
			if($_FILES['imagem1']['name'] != null){	
				$arq = self::receber_imagem("imagem1",0);
				$dados = array("imagem1" => $arq);
				$this->conteudo->atualizar_imagem($dados);
			}
			
			if($_FILES['imagem2']['name'] != null){	
				$arq = self::receber_imagem("imagem2",0);
				$dados = array("imagem2" => $arq);
				$this->conteudo->atualizar_imagem($dados);
			}
			if($_FILES['imagem3']['name'] != null){	
				$arq = self::receber_imagem("imagem3",0);
				$dados = array("imagem3" => $arq);
				$this->conteudo->atualizar_imagem($dados);
			}
			
			if($_FILES['imagem4']['name'] != null){	
				$arq = self::receber_imagem("imagem4",0);
				$dados = array("imagem4" => $arq);
				$this->conteudo->atualizar_imagem($dados);
			}
			
			if($_FILES['imagem5']['name'] != null){	
				$arq = self::receber_imagem("imagem5",0);
				$dados = array("imagem5" => $arq);
				$this->conteudo->atualizar_imagem($dados);
			}
			
			if($_FILES['imagem6']['name'] != null){	
				$arq = self::receber_imagem("imagem6",0);
				$dados = array("imagem6" => $arq);
				$this->conteudo->atualizar_imagem($dados);
			}
			
			if($_FILES['imagem7']['name'] != null){	
				$arq = self::receber_imagem("imagem7",0);
				$dados = array("imagem7" => $arq);
				$this->conteudo->atualizar_imagem($dados);
			}
			
			if($_FILES['imagem8']['name'] != null){	
				$arq = self::receber_imagem("imagem8",0);
				$dados = array("imagem8" => $arq);
				$this->conteudo->atualizar_imagem($dados);
			}
			
			if($_FILES['imagem9']['name'] != null){	
				$arq = self::receber_imagem("imagem9",0);
				$dados = array("imagem9" => $arq);
				$this->conteudo->atualizar_imagem($dados);
			}
			
			if($_FILES['imagem10']['name'] != null){	
				$arq = self::receber_imagem("imagem10",0);
				$dados = array("imagem10" => $arq);
				$this->conteudo->atualizar_imagem($dados);
			}
			
			if($_FILES['imagem11']['name'] != null){	
				$arq = self::receber_imagem("imagem11",0);
				$dados = array("imagem11" => $arq);
				$this->conteudo->atualizar_imagem($dados);
			}
			
			if($_FILES['imagem12']['name'] != null){	
				$arq = self::receber_imagem("imagem12",0);
				$dados = array("imagem12" => $arq);
				$this->conteudo->atualizar_imagem($dados);
			}
			
			if($_FILES['imagem13']['name'] != null){	
				$arq = self::receber_imagem("imagem13",0);
				$dados = array("imagem13" => $arq);
				$this->conteudo->atualizar_imagem($dados);
			}
			
			if($_FILES['imagem14']['name'] != null){	
				$arq = self::receber_imagem("imagem14",0);
				$dados = array("imagem14" => $arq);
				$this->conteudo->atualizar_imagem($dados);
			}
			
			if($_FILES['imagem15']['name'] != null){	
				$arq = self::receber_imagem("imagem15",0);
				$dados = array("imagem15" => $arq);
				$this->conteudo->atualizar_imagem($dados);
			}
			
			if($_FILES['imagem16']['name'] != null){	
				$arq = self::receber_imagem("imagem16",0);
				$dados = array("imagem16" => $arq);
				$this->conteudo->atualizar_imagem($dados);
			}
			
			self::conteudo();
		}
		
		public function reservado(){
			$this->load->model("reservado");
			$dados = array ("res" => $this->reservado->carregar_dados());			
			$this->load->view("reservado", $dados);
		}
		
		public function registrar_reservado(){
			$this->load->model("reservado");
			$x = $this->reservado->possui_linha();
			
			$dados = array(
				"nome" => $this->input->post("nome"),
				"email" => $this->input->post("email"),
				"telefone" => $this->input->post("telefone"),
				"observacao" => $this->input->post("obser")
			);
			
			$teste = true;
			foreach($dados as $d=>$v){
			if($v == "")
				$teste = false;
			}
			if($x > 0 ){
				if($teste)
					$this->reservado->salvar_reservado($dados);				
			}
			else{
				if($teste)
					$this->reservado->inserir_reservado($dados);
			}
			self::reservado();			
		}
		
		public function configurar(){
			$this->load->model("configurar");
			$dados = array ("config" => $this->configurar->carregar_dados());			
			$this->load->view("configurar", $dados);
		}
		
		public function registrar_configurar(){
			$this->load->model("configurar");			
			
			$x = $this->configurar->possui_linha();
			
			$dados = array(
				"cor" => $this->input->post("cor")				
			);
			
			if($x > 0 ){
				$this->configurar->salvar_configuracao($dados);				
			}
			else{
				$this->configurar->inserir_configuracao($dados);
			}
			
			$y = 4;
			
			while( $y > 0){
				if($_FILES['back'.$y]['name'] != null){	
					$arq = self::receber_imagem("back".$y,0);
					$dados = array("back".$y => $arq);
					$this->configurar->atualizar_imagem($dados);
				}
				$y--;
			}			
			self::configurar();			
		}
		
		public function menu_secundario(){
			$this->load->model("menu_secundario");
			$dados = array ("secundario" => $this->menu_secundario->carregar_dados());						
			$this->load->view("menu_secundario", $dados);		
		}
		
		public function registrar_menu_secundario(){
			$this->load->model("menu_secundario");
			
			$x = $this->menu_secundario->possui_linha();
			
			$dados = array(
				"opc1" => $this->input->post("opc1"),
				"opc2" => $this->input->post("opc2"),				
				"opc3" => $this->input->post("opc3")				
			);
			
			$teste = true;
			foreach($dados as $d=>$v){
			if($v == "")
				$teste = false;
			}
			
			if($x > 0 ){
				if($teste)
					$this->menu_secundario->salvar_campos($dados);				
			}
			else{
				if($teste)
					$this->menu_secundario->inserir_campos($dados);
			}
			
			self::menu_secundario();			
		}
				
		public function receber_imagem($nome, $tamanho){
			$config['upload_path'] = "./uploads/";
			$config['allowed_types'] = 'gif|jpg|png';						 
			$config['file_name'] = utf8_decode($_FILES[$nome]['name']);						 
			$config['file_name'] = sha1($config['file_name']);
			$config['max_size'] = $tamanho;						
			$config['max_width'] = 0;			
			$config['max_heigth'] = 0;			
			$this->load->library('upload', $config);		
			$this->upload->do_upload($nome);
			
			return $this->upload->file_name;
		}
		
	}
?>