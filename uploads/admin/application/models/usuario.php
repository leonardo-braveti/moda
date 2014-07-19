<?php
	class Usuario extends CI_Model{		
		public function validar($data){			
			$this->db->where("emailUser", $data["email"]); 
			$this->db->where("senhaUser", $data["senha"]); 
			$res = $this->db->get("tbusuario")->row_array();
			return $res;
		}
		public function carregarUsuarios(){
			return $this->db->get("tbusuario")->result_array();			
		}
		
		public function salvar($data){
			$this->db->insert('tbusuario', $data); 			
		}
		public function atualizar($data){									
			$this->db->where("idUser", $data["idUser"]);
			$this->db->update('tbusuario', $data); 			
		}
		public function excluir($id){
			$this->db->where("idUser",$id);
			$this->db->delete('tbusuario'); 			
		}
	}
?>