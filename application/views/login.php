<?php
    $this->load->view('header');
?>
    
    
    <form action="<?php echo base_url('logar') ?>" method="post">
       
        <div class="text-center">
        <img src="assets/img/logo2.png" alt="" class="" width="200"><br>
        <label ><strong>Usuário:</strong></label><br>
        <input type="text" name="user" id="" required><br>
        <label><strong>Senha:</strong></label><br>
        <input type="password" name="senha" id="" required><br><br>
        <input type="submit" class="btn btn-default" name="bt_login" value="Logar">
        
        <br><Br><h3><strong><em>
    <?php 
        if (isset($msg)) {
            echo $msg;
        }
    ?>
    
    </em></strong></h3>
        </div>
    </form>
    
</body>
</html>