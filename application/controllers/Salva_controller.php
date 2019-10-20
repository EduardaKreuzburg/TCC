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
        $palavra = $_POST['palavra'];
        $significado = $_POST['sig'];

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
        
        $insercao_gif = array(
            'end_video' => $endereco,
            'nm_video' => $arquivo['name']
            
        );

        $insercao_palavra = array(
            'nm_palavra' => $palavra
        );

        $insercao_significado = array(
            'desc_significado' => $significado
        );
        
        $this->um->insercoes($insercao_gif, $insercao_palavra, $insercao_significado);
        
        /* 
        trazer aqui todos os códigos 
        (ultima palavra inserida, ultimo significado inserido, ultimo endereco de video e id da sessao estabelecida)
        */

        print_r ($this->um->retornoPalavra()[0]['id_palavra']);
        print_r ($this->um->retornoSignificado()[0]['id_significado']);
        print_r ($this->um->retornoEndereco()[0]['id_video']);
        print_r($_SESSION['id']);

        $insercao_relacao = array(
            'idf_palavra' => $this->um->retornoPalavra()[0]['id_palavra'],
            'idf_significado' => $this->um->retornoSignificado()[0]['id_significado'],
            'idf_video' => $this->um->retornoEndereco()[0]['id_video'],
            'idf_usuario' => $_SESSION['id']
        );

        $this->um->insereRelacao($insercao_relacao);

        /*
        logo depois disso, enviar tais códigos para uma outra função no model, 
        esta que ira fazer inserção na tabela q relaciona todos os elementos do sistema
        */

         redirect(base_url('manipulacao_gif'));
    }
    
}


