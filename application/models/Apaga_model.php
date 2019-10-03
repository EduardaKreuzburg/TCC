<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apaga_model extends CI_Model {

	
	public function __construct()
    {
        parent::__construct();
        
    }

    public function pegadados()
    {
        $dados = $this->db->get('tb_video');
        return $dados->result();
        
    }

    public function removebd($id)
    {
        $this->db->where('id_video', $id);
        
        $this->db->delete('tb_video');
        
    }
}
