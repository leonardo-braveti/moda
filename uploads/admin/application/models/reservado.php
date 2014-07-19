<?php
	class Reservado extends CI_Model{
		
		public function carregar_dados(){	
			return $this->db->get("reservado")->row_array();						
		}
		
		public function possui_linha(){		
			$res = $this->db->get("reservado")->row_array();			
			
			if(count($res) > 0)
				return 1;
			else
				return 0;
		}		
		
		public function inserir_reservado($data){
			$this->db->insert('reservado', $data); 						
		}		
		
		public function salvar_reservado($data){			
			$this->db->where("id",1);
			$this->db->update('reservado', $data); 			
		}				
		
	}
?>