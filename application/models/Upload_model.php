<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        
    }
    

    public function insercoes($array_gif, $array_palavra, $array_significado)
    {
        $this->db->insert('tb_video', $array_gif);
        $this->db->insert('tb_palavra', $array_palavra);
        $this->db->insert('tb_significado', $array_significado);
        
    }

    public function retornoPalavra()
    {
        $this->db->select('id_palavra');
        $this->db->order_by('id_palavra', 'desc');
        return $this->db->get('tb_palavra', 1, null)->result_array();
        
    }
    public function retornoSignificado()
    {
        $this->db->select('id_significado');
        $this->db->order_by('id_significado', 'desc');
        return $this->db->get('tb_significado', 1, null)->result_array();
        
        
    }
    public function retornoEndereco()
    {
        $this->db->select('id_video');
        $this->db->order_by('id_video', 'desc');
        return $this->db->get('tb_video', 1, null)->result_array();
        
        
    }

    public function insereRelacao($array)
    {
        $this->db->insert('tb_palavra_significado', $array);
        
    }

}


