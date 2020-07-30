<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {


		 function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->model('Contato_model', 'model', TRUE);
   		 }


	public function index(){		
		$dados['titulo'] = "CRUD com CodeIgniter | Agenda";
		$dados['contatos'] = $this->model->listar();
		$this->load->view('home', $dados);

	}


	function salvar(){
		$id = $this->input->post('id');

		if(!empty($id)) {
			$dados['id'] = $id;
		}

		$dados['nome'] = $this->input->post('nome');
		$dados['email'] = $this->input->post('email');
		$dados['telefone'] = $this->input->post('telefone');
	
		if(empty($id)){
			$this->model->cadastrar($dados);
			 
		} else {
			$this->model->atualizar($dados);
		}

		redirect(base_url());
	}


	function editar($id){
		$var = $this->model->getContatoById($id)->result_array();
		$dados['contato'] = $var[0];
		$this->load->view('editar', $dados);
	}

	function remover($id){
		$this->model->remover($id);	
		 redirect(base_url());			
	}

}

?>