<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tela_adm_controller extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Info_usuarios_model', 'ium');
	}

	public function index()
	{
		
		$chama = $this->ium->usuariosPendente();
		$dados['chama'] = $chama;
		
		$this->load->view('tela_adm', $dados);

	}
	
	public function outra(){
		if (isset($_POST['Aceito'])) {
			$this->ium->situacao('2', $_POST['Aceito']);
			redirect(base_url('tela_adm'));
		}
		if (isset($_POST['Negado'])) {
			$this->ium->situacao('1', $_POST['Negado']);
			redirect(base_url('tela_adm'));
		}
		
	}

  
}



