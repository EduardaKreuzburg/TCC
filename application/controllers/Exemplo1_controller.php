<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplo1_controller extends CI_Controller {

	
	public function index()
	{   
        $this->load->model('exemplo1_model', 'apelido');
        $lista['model']=$this->apelido->carrega();

        $lista['titulo'] = 'Inicio';
        $this->load->view('header', $lista);
		$this->load->view('inicio', $lista);
    }
    public function chamaPagDois()
    {
        $lista['titulo'] = 'Pagina 2';
        $this->load->view('header', $lista);
        $this->load->view('pagina2');
    }
    public function chamaPagTres()
    {
        $lista['titulo'] = 'Pagina 3';
        $this->load->view('header', $lista);
        $this->load->view('pagina3');
    }
    public function logar()
    {
        $valor = $_POST['texto'];
        $this->load->model('exemplo1_model', 'apelido');
        $this->apelido->verif();
    }
}
