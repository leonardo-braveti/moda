<?php
	class Produto extends CI_Model{				
		public function carregarProdutos(){
			return $this->db->get("produto")->result_array();		
		}		
		public function salvar($data){
			$this->db->insert('produto', $data); 			
		}
		public function atualizar($data){			
			$this->db->where("id",$data["id"]);
			$this->db->update('produto', $data); 			
		}
		
		public function resgatar_paginas(){			
			$this->db->select("pagina");
			$this->db->distinct();
			return $this->db->get("produto")->result_array();		
		}
		public function nova_pagina($data){
			foreach($data as $k=>$v){
				$this->db->where("pagina",$k);
				$c = array("pagina" => $v);
				$this->db->update('produto', $c); 					
			}
			
		}
		public function excluir($id){
			$this->db->where("id",$id);
			$p = $this->db->get("produto")->row();			
			$nome = $p->foto;

			$this->db->where("id",$id);
			$this->db->delete('produto'); 	

			@unlink("../uploads/$nome");

		}
	}
?>