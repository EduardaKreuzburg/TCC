<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_usuarios_model extends CI_Model {

	
	public function confirmaExistencia($nomeUsuario, $senha)
	{
        $sql1 = 'SELECT 1 as existenciauser FROM tb_usuario WHERE nnm_usuario = ?';
        $conf_user = $this->db->query($sql1, array($nomeUsuario));
        $sql2 = 'SELECT 1 as existenciasenha FROM tb_usuario WHERE nnm_usuario = ? and senha = ?';
        $conf_senha = $this->db->query($sql2, array($nomeUsuario, $senha));
        $sql3 = 'SELECT situacao_id FROM tb_usuario WHERE nnm_usuario = ?';
        $conf_autoriza = $this->db->query($sql3, array($nomeUsuario));
        $resultados['conf_user'] = $conf_user;
        $resultados['conf_senha'] = $conf_senha;
        $resultados['conf_autoriza'] = $conf_autoriza;

        return $resultados;
    }
    public function dadoUsuario($nomeUsuario)
    {
        $sql = 'SELECT id_us, nnm_usuario, niveis_acessos_id FROM tb_usuario WHERE nnm_usuario = ?';
        $exec = $this->db->query($sql, array($nomeUsuario));
        return $exec;
    }

    public function usuariosPendente()
    {
        $sql = 'SELECT * FROM tb_usuario WHERE situacao_id = 0';
        $exec = $this->db->query($sql);
        return $exec->result();
    }

    public function situacao($novaSitu, $id){
        $sql = 'UPDATE tb_usuario SET situacao_id = ? WHERE id_us = ?';
        
        if ($this->db->query($sql, array($novaSitu, $id))) {
            return 'executou';
        }else {
            return 'falhou';
        }
        
    }
}



// SELECT * FROM tb_palavra_significado;

// SELECT * FROM tb_video;

// SELECT * FROM tb_usuario;

// SELECT u.nnm_usuario, v.nm_video 
// FROM tb_palavra_significado as ps, tb_video as v, tb_usuario as u
// WHERE ps.idf_video = v.id_video AND
// ps.idf_usuario = u.id_us
// ORDER BY ps.idf_palavra ASC;