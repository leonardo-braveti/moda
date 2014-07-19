<?php
	class Mensagem extends CI_Model{
		public function carregarMensagens(){
			$this->db->order_by("id", "desc"); 
			return $this->db->get("mensagem")->result_array();					
		}		
		
	}
?>