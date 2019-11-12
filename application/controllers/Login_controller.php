<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
        $this->load->view('login');
    }
    
    public function logar()
    {
           
        $this->load->model('info_usuarios_model', 'ium');

        

        $retorno = $this->ium->confirmaExistencia($_POST['user'], $_POST['senha']);

        if ($retorno['conf_user']->row()->existenciauser == 1) {
            if ($retorno['conf_senha']->row()->existenciasenha == 1) {
               switch ($retorno['conf_autoriza']->row()->situacao_id) {
                   case '0':
                       $msg = 'Seu acesso ainda não foi permitido';
                       $this->load->view('login', ['msg' => $msg]);
                       break;

                   case '1':
                       $msg = 'Seu acesso não foi permitido';
                       $this->load->view('login', ['msg' => $msg]);
                       break;
                   
                   case '2':
                       $dado_usuario = $this->ium->dadoUsuario($_POST['user']);
                       
                       $data_user = [
                            'id' => $dado_usuario->row()->id_us,
                            'user' => $dado_usuario->row()->nnm_usuario,
                            'acesso' => $dado_usuario->row()->niveis_acessos_id
                       ];

                       $this->session->set_userdata($data_user);

                       redirect(base_url());
                      
                       break;
                 
               }

            } else {
                $msg = 'Senha incorreta';
                $this->load->view('login', ['msg' => $msg]);
            }
            
        } else {
            $msg = 'Usuário inexistente';
            $this->load->view('login', ['msg' => $msg]);
        }
        
        //echo $retorno['conf_user']->row()->existenciauser;
        //echo $retorno['conf_senha']->row()->existenciasenha;

    }
    
    public function sair()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('acesso');
        redirect(base_url());


    }

    


}
