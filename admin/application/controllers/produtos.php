<?php
class Produtos extends CI_Controller{

	public function index(){				
		$this->load->model("produtos_model");
		$produtos = $this->produtos_model->buscaTodos();		
		$dados = array ("produtos"=> $produtos);
		$this->load->helper(array("url","currency","form"));		
		$this->load->view("produtos/index.php", $dados);
	}
	public function formulario(){				
		$this->load->view("produtos/formulario");
	}
	public function novo(){
		$dono = $this->session->userdata("usuario_logado");
		$produto = array(
			"nome" => $this->input->post("nome"),
			"descricao" => $this->input->post("descricao"),
			"preco" => $this->input->post("preco"),
			"usuario_id" => $dono[id]
		);
		$this->load->model("produtos_model");
		$this->produtos_model->salva($produto);		
		redirect("/");
		
	}
}
?>
