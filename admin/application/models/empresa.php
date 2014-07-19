<?php
	class Empresa extends CI_Model{
		public function carregarEmpresa(){		
			return $this->db->get("empresa")->row_array();			
		}		
		public function salvar($data){
			$this->db->insert('empresa', $data); 						
		}
		public function atualizar($data){	
			$this->db->where("id", 1);
			$this->db->update('empresa', $data); 			
		}		
	}
?>