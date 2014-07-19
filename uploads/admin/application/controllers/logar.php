<?php			
	class Logar extends CI_Controller{	
		public function index(){							
			$this->load->library('session');
			$credencial = array(
				"email" => $this->input->post("email"),
				"senha" => $this->input->post("senha")			
			);
			$this->load->model("usuario");
			$user = $this->usuario->validar($credencial);																	
			if($user){									
				$this->session->set_userdata("usuario", $user);	
				$this->session->set_userdata("banco", $this->db->database);
				echo "true";				
			}
			else{									
				echo "false";
			}
		}				
	}
?>
