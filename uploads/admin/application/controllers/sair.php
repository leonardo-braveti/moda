<?php
	class Sair extends CI_Controller{
		
		public function logout(){
			$items = array('usuario' => '');
			$this->session->unset_userdata($items);
			$this->session->sess_destroy();	
			redirect("/");
		}
	}
?>