<?php
	class Conteudo extends CI_Model{
		
		public function carregar_conteudo(){	
			return $this->db->get("conteudo")->row_array();						
		}
		
		public function possui_linha(){		
			$res = $this->db->get("conteudo")->row_array();			
			
			if(count($res) > 0)
				return 1;
			else
				return 0;
		}		
		public function salvar_conteudo($data){
			$this->db->insert('conteudo', $data); 						
		}		
		
		public function atualizar_conteudo($data){			
			$this->db->where("id",1);
			$this->db->update('conteudo', $data); 			
		}		
		
		
		public function atualizar_imagem($data){			
			$this->db->where("id",1);			
			$this->db->update('conteudo', $data); 			
		}		
		
	}
?>