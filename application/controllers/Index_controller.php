<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_controller extends CI_Controller {


	function __construct(){
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('inicial');
	}

	public function sinal()
    {
        // $lista['titulo'] = 'Sinais Comuns';
        // $this->load->view('header', $lista);
        $this->load->view('sinal');
	}
	
	

	public function upload()
    {
        // $lista['titulo'] = 'Faça parte do Librator';
		// $this->load->view('header', $lista);
		$this->load->model('apaga_model', 'am');
		
		$dados['pega'] = $this->am->pegadados();
		

		$this->load->view('upload', $dados);
		
	}
	
}
