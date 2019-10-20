<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Tradutor_controller extends CI_Controller {
        
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('traduzir_model', 'tm');
            
        }
        
    
        public function index()
        {
            
            $vemdopost = $_POST['paratraduzir'];
            
            $palavras = explode(" ", $vemdopost);

            $dados['traduzidos']=$this->tm->traduz($palavras);

            $this->load->view('inicial', $dados);

            
            
        }
    
    }
    
    /* End of file Tradutor_controller.php */
    