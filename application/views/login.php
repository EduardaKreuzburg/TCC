<?php
    $this->load->view('header');
?>
    <div class="text-center">
    
    <form action="<?php echo base_url('logar') ?>" method="post">
       <!-- POR PRODUCTION PARA NÃO APARECER O ERRO EM CI -->
       <!-- POR PRODUCTION PARA NÃO APARECER O ERRO EM CI -->
       <!-- POR PRODUCTION PARA NÃO APARECER O ERRO EM CI -->
       <!-- POR PRODUCTION PARA NÃO APARECER O ERRO EM CI -->
       <!-- POR PRODUCTION NO INDEX.PHP PARA NÃO APARECER O ERRO EM CI -->

        <fieldset>
            
        <img src="assets/img/Librator.png" alt="" class="" width="200"><br>
        <label ><strong>Usuário:</strong></label><br>
        <input type="text" name="user" id="" required><br>
        <label><strong>Senha:</strong></label><br>
        <input type="password" name="senha" id="" required><br><br>
        <input type="submit" class="btn btn-default" name="bt_login" value="Logar">
        </fieldset>
        <br><Br>
    <?php 
        if (isset($msg)) { ?>
         <div class="alert alert-warning alerta-du" role="alert"> <?php
            echo $msg;
        } ?>
        </div>
    
    
    
        </div>
    </form>
    
</body>
</html>