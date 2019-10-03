<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplo1_model extends CI_Model {

	
	public function carrega()
	{
        $umTeste = 'Venho do model';
        return $umTeste;
    }
    public function verif($var)
    {
        if ($var == 1) {
            return 'certo';
        }else{
            return 'errado';
        }
    }
}
