<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Traduzir_model extends CI_Model {

    public function traduz($array)
    {
        // $this->db->select('nm_palavra, desc_significado, end_video');
        // $this->db->from('tb_palavra as p');
        // $this->db->from('tb_video as v');
        // $this->db->from('tb_significado as s');
        // $this->db->from('tb_palavra_significado as ps');

        // $this->db->where('Field / comparison', $Value);
        
        /*ps.idf_palavra=p.id_palavra AND
        ps.idf_video=v.id_video AND
        ps.idf_significado=s.id_significado;*/



        // $this->db->where('p.nm_palavra =', $array);
        
        $sql = 'select nm_palavra, desc_significado, end_video 
        from tb_palavra as p, tb_video as v, tb_significado as s, tb_palavra_significado as ps
        where p.nm_palavra = ? AND
        ps.idf_palavra=p.id_palavra AND
        ps.idf_video=v.id_video AND
        ps.idf_significado=s.id_significado;';
        $dados = array();
        for ($i=0; $i < sizeof($array); $i++) {  

            $dados[$i]=$this->db->query($sql, array($array[$i]))->result_array();


        }

        return $dados;
    }
    

}

/* End of file ModelName.php */


?>