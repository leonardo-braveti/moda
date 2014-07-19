<?php
	class Menu extends CI_Model{
		public function carregarMenu(){		
			return $this->db->get("menu")->row_array();			
		}		
		public function salvar($data){
			$this->db->insert('menu', $data); 						
		}
		public function atualizar($data){			
			$this->db->update('menu', $data); 			
		}		
	}
?>