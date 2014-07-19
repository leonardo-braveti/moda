<?php
	class Endereco extends CI_Model{
		public function carregarEnderecoPrincipal(){
			$this->db->where("id", 1);			
			return $this->db->get("endereco")->row_array();			
		}
		public function carregarEnderecos(){					
			return $this->db->get("endereco")->result_array();			
		}		
		public function buscarPorId($id){			
			settype($id, "integer");
			$this->db->where("id", $id);			
			return $this->db->get('endereco')->row_array();
		}
		public function salvar($data){
			$this->db->insert('endereco', $data); 						
		}
		public function atualizar($data){	
			$this->db->where("id", $data["id"]);
			$this->db->update('endereco', $data); 		
		}		
		public function excluir($id){	
			$this->db->where("id", $id);
			$this->db->delete('endereco'); 			
		}		
	}
?>