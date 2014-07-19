<?php
	class Links extends CI_Model{
		public function carregarDados(){
			$this->db->where("id", 1);			
			return $this->db->get("links")->row_array();			
		}		
		public function atualizar($data){	
			$this->db->where("id", 1);
			$this->db->update('links', $data); 		
		}		
	}
?>