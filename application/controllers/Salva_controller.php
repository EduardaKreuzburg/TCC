<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Salva_controller extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
        $this->load->model('upload_model', 'um');
        
        
    }
    

    public function index()
    {
        $this->load->view('upload');
                
    }
    public function arquivar()
    {
        
        $pasta = base_url('assets/video/');
        $arquivo = $_FILES['arquivo'];

        $config = array(
            'upload_path' => './assets/video',
            'file_name' => $arquivo['name'],
            'allowed_types' => 'gif'
        );

        $this->upload->initialize($config);        
        
        if ( ! $this->upload->do_upload('arquivo')){
            $error = array('error' => $this->upload->display_errors());
            echo $error['error'];
        }
        else{
            $data = array('upload_data' => $this->upload->data());
             
        }
       
        $endereco = $pasta.$arquivo['name'];
        
        $insercao = array(
            'end_video' => $endereco,
            'nm_video' => $arquivo['name']
        );

        

        $this->um->salvaEndereco($insercao);
        
         redirect(base_url('editar_video'));
    }

}


