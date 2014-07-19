<?php
	class Configurar extends CI_Model{
		
		public function carregar_dados(){	
			return $this->db->get("configurar")->row_array();						
		}
		
		public function possui_linha(){		
			$res = $this->db->get("configurar")->row_array();			
			
			if(count($res) > 0)
				return 1;
			else
				return 0;
		}		
		
		public function inserir_configuracao($data){
			$this->db->insert('configurar', $data); 						
		}		
		
		public function salvar_configuracao($data){			
			$this->db->where("id",1);
			$this->db->update('configurar', $data); 			
		}				
		
		public function atualizar_imagem($data){			
			$this->db->where("id",1);			
			$this->db->update('configurar', $data); 			
		}		
		
	}
?>