<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apaga_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('apaga_model', 'am');
        
        
    }

    public function remover()
    {
        
        $id = $this->input->post('escolharemocao');
        $this->am->removebd($id);
        
        redirect(base_url('manipulacao_gif'));
        
        

    }



	
}
