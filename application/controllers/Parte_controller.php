<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parte_controller extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('parte');
	}


	public function cadastra(){
		$this->load->model('faca_parte_model', 'fpm');


			$nome = $this->input->post('nome_user');
   			$usuario = $this->input->post('user');
    		$senha = $this->input->post('senha');
    		$sabe = $this->input->post('sabe');
    		$curso = $this->input->post('curso');
			$caixa = $this->input->post('caixa');
			
			
		
		$this->fpm->confirmaCadastro($nome,$usuario,$senha,$sabe,$curso,$caixa);
		
		redirect(base_url());
	}

}