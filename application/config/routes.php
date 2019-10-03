<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Index_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['sinais_comuns'] = 'Index_controller/sinal';
$route['faca_parte'] = 'parte_controller';
$route['cadastra'] = 'parte_controller/cadastra';
$route['login'] = 'login_controller';
$route['editar_video'] = 'index_controller/upload';
$route['logar'] = 'login_controller/logar';
$route['sair'] = 'login_controller/sair';
$route['tela_adm'] = 'tela_adm_controller';
$route['rota'] = 'tela_adm_controller/outra';
$route['salva'] = 'salva_controller/arquivar';
$route['removendo'] = 'apaga_controller/remover';



