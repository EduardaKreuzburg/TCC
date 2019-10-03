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

    <!-- <script src="assets/bootstrap/js/bootstrap.js"></script> -->
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>

    <!-- <script src="assets/bootstrap/js/bootstrap.bundle.js.map"></script> -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="assets/bootstrap/js/bootstrap.bundle.min.js.map"></script> -->

    <script src="assets/bootstrap/js/jquery-3.4.1.min.js"></script>

    <!-- <script src="assets/bootstrap/js/bootstrap.js.map"></script> -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="assets/bootstrap/js/bootstrap.min.js.map"></script> -->


    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php  ?></title>
</head>
<body>
    <ul class="menu">
    <img src="assets/img/logo2.png" alt="" class="rounded-circle" width="100" height="80">
        <li><a href="<?php echo base_url(); ?>">Tradutor</a></li>
        <li><a href="<?php echo base_url('sinais_comuns'); ?>">Sinais comuns</a></li>
    <?php
        if (isset($_SESSION['id'])) {
        ?> <li><a href="<?php echo base_url('editar_video'); ?>">Editar Video</a></li>
            

            <?php
                if ($_SESSION['acesso'] == 1) { ?>
                    <li><a href="<?php echo base_url('tela_adm'); ?>">Controle dos administradores</a></li>
                <?php } ?>
               

            <li><a href="<?php echo base_url('sair'); ?>">Sair</a></li>
          
          <?php 
           
        }else{
            ?>
                <li><a href="<?php echo base_url('faca_parte'); ?>">Faça parte do Librator</a></li>
                <li><a href="<?php echo base_url('login'); ?>">Entrar como administrador</a></li>
            <?php
        }

    ?>
        
        
    </ul>

    