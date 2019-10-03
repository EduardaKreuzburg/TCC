<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faca_parte_model extends CI_Model {

	
	public function confirmaCadastro($nome,$usuario,$senha,$sabe,$curso,$caixa){
        $sql = "INSERT INTO `tb_usuario` VALUES (DEFAULT,'$nome','$usuario','$senha','0','2','$sabe','$curso','$caixa')";
		$this->db->query($sql);
	
    }
   
}

