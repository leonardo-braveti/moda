<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Entrada extends CI_Controller {	
	public function index(){		
		$this->load->library('session');
		$user = $this->session->userdata("usuario");
		
		$this->load->model("empresa");
		$emp = $this->empresa->carregarEmpresa();
		$dados = array("empresa" => $emp);
		$this->session->set_userdata("empresa", $emp);		
		
		$this->load->view("login.php");		
	}
}

