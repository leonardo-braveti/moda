<?php
	class Login extends CI_Controller{
		function autenticar(){
			
			$email = $this->input->post("email");
			$senha = md5($this->input->post("senha"));
			$this->load->model("usuarios_model");
			$usuario = $this->usuarios_model->logar($email,$senha);
			if($usuario){
				$this->session->set_userdata("usuario_logado",$usuario);
				$this->session->set_flashdata("sucesso", "Logado com sucesso");
			}
			else{
				$this->session->set_flashdata("fracasso", "Usuario ou senha invalido");
			}			
			redirect("/");
		}
		function logout(){
			$this->session->unset_userdata("usuario_logado");			
			$this->session->set_flashdata("sucesso", "Voce saiu do sistema");
			redirect("/");
		}
	}
?>