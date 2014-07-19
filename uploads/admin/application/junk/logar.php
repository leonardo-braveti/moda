<?php			
	class Logar extends CI_Controller{	
		public function index(){				
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');		
			$this->form_validation->set_rules('senha', 'Senha', 'required');
			
			if($this->form_validation->run() == FALSE){	
				$this->session->set_flashdata("situacao", "Login e/ou senha inválidos!");
				redirect("/");				
			}
			else{		
				$user = array(
					"email" => $this->input->post("email"),
					"senha" => $this->input->post("senha")			
				);
				$this->load->model("Usuario");
				$teste = $this->usuario->validar($user);									
				if($teste){				
					$this->load->view("home");
				}
				else{
					$this->session->set_flashdata("situacao", "Login e/ou senha inválidos!");										
					redirect("/");			
				}
				
			}		
		}
	}
?>
