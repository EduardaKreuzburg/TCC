<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css"  href="assets/css/estilo.css" /> -->
    
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css"  href="assets/bootstrap/css/bootstrap-reboot.css" />
    <link rel="stylesheet" type="text/css"  href="assets/bootstrap/css/bootstrap-grid.css" />
    <link rel="stylesheet" type="text/css"  href="assets/bootstrap/css/bootstrap.css" />
    
    <!-- <link rel="stylesheet" type="text/css"  href="assets/bootstrap/css/bootstrap-grid.css.map" /> -->
    <!-- <link rel="stylesheet" type="text/css"  href="assets/bootstrap/css/bootstrap-grid.min.css" /> -->
    <!-- <link rel="stylesheet" type="text/css"  href="assets/bootstrap/css/bootstrap-grid.min.css.map" /> -->

    <!-- <link rel="stylesheet" type="text/css"  href="assets/bootstrap/css/bootstrap-reboot.css.map" /> -->
    <!-- <link rel="stylesheet" type="text/css"  href="assets/bootstrap/css/bootstrap-reboot.min.css" /> -->
    <!-- <link rel="stylesheet" type="text/css"  href="assets/bootstrap/css/bootstrap-reboot.min.css.map" /> -->

    <!-- <link rel="stylesheet" type="text/css"  href="assets/bootstrap/css/bootstrap.css.map" /> -->
    <!-- <link rel="stylesheet" type="text/css"  href="assets/bootstrap/css/bootstrap.min.css" /> -->
    <!-- <link rel="stylesheet" type="text/css"  href="assets/bootstrap/css/bootstrap.min.css.map" /> -->

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>

    <script src="assets/bootstrap/js/bootstrap.bundle.js.map"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js.map"></script>

    <script src="assets/bootstrap/js/jquery-3.4.1.min.js"></script>

    <script src="assets/bootstrap/js/bootstrap.js.map"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js.map"></script>

    

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php  ?></title>
</head>
<body style="">
    <nav class="navbar navbar-expand-lg flex-row nav_ek" style="background-color: #878787; padding:-2px;">
        <a href="<?php echo base_url(); ?>">
            <img src="assets/img/Librator.png" alt="" width="120" height="100" style="padding: 1px">
        </a>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
    
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav nav_nd">
            <li class="nav-item navegacao_header"><a class="nav-link navegacao_a" href="<?php echo base_url(); ?>">Tradutor</a></li>
            <li class="nav-item navegacao_header"><a class="nav-link navegacao_a" href="<?php echo base_url('sinais_comuns'); ?>">Sinais comuns</a></li>
    <?php
        if (isset($_SESSION['id'])) {
    ?>      <li class="nav-item navegacao_header"><a class="nav-link navegacao_a" href="<?php echo base_url('manipulacao_gif'); ?>">Manipulação de GIF</a></li>
 
    <?php
            if ($_SESSION['acesso'] == 1) { ?>
            <li class="nav-item navegacao_header"><a class="nav-link navegacao_a" href="<?php echo base_url('tela_adm'); ?>">Controle dos administradores </a></li>
    <?php   } ?>
    
            <li class="nav-item navegacao_header"><a class="nav-link navegacao_a" href="<?php echo base_url('sair'); ?>">Sair</a></li>
    
    <?php 
           
        }else{
            ?>
                <li class="nav-item navegacao_header"><a class="nav-link navegacao_a" href="<?php echo base_url('faca_parte'); ?>">Faça parte do Librator</a></li>
                <li class="nav-item navegacao_header"><a class="nav-link navegacao_a" href="<?php echo base_url('login'); ?>">Entrar como administrador</a></li>
            <?php
        }

    ?>
        </ul>
    
        
        
    
    </div>
    </nav>
    


    