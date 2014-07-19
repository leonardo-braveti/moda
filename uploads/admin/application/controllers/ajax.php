<?php
	class Ajax extends CI_Controller{
	
		public function email_teste(){			
			$this->load->library('form_validation');									
			$this->form_validation->set_rules('teste', 'Email', 'required|valid_email|is_unique[tbusuario.emailUser]');					
			
			if($this->form_validation->run() == FALSE)		
				echo "false";
			else
				echo "true";
		}				
	}
?>