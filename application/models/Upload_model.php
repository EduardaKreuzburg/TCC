<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        
    }
    

    public function salvaEndereco($array)
    {
        $this->db->insert('tb_video', $array);
        
    }

}


