<?php
	class menu_secundario extends CI_Model{
		
		public function carregar_dados(){	
			return $this->db->get("menu_secundario")->row_array();						
		}
		
		public function possui_linha(){		
			$res = $this->db->get("menu_secundario")->row_array();			
			
			if(count($res) > 0)
				return 1;
			else
				return 0;
		}		
		
		public function inserir_campos($data){
			$this->db->insert('menu_secundario', $data); 						
		}		
		
		public function salvar_campos($data){			
			$this->db->where("id",1);
			$this->db->update('menu_secundario', $data);
			//ok
			$this->load->model("produto");
			$paginas = $this->produto->resgatar_paginas();
			
			$novo_array = "";
			
			if($data["opc1"] != $paginas[0])
				$novo_array[0] = $data["opc1"];
			if($data["opc2"] != $paginas[1])
				$novo_array[1] = $data["opc2"];
			if($data["opc3"] != $paginas[2])
				$novo_array[2] = $data["opc3"];
			
			//$atualizar = array($paginas[0] => $data["opc1"], $paginas[1] => $data["opc2"], $paginas[2] => $data["opc3"]);
			
			//$paginas 
			var_dump($paginas);			
			echo "<br>";
			var_dump($novo_array);			
			echo "<br>";
			var_dump($atualizar);			
		}	

		
	}
?>