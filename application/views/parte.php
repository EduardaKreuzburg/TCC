<?php
    $this->load->view('header');
?>
<br>
    <div class="text-center">
        <h2 id="cadastro"><em> PREENCHA O FORMULÁRIO SE DESEJA SER ADMINISTRADOR DO LIBRATOR.
    </div><br>
    <?php 
        if (isset($msg)) {
            echo $msg;
        }
    ?>
    </em></h2>
    <tr>
		<td colspan="2"><?php echo @$error; ?></td>
    </tr>
    <div id="area">
    
    <form id="cad" action="<?php echo base_url('cadastra') ?>" method="post">
        
        <fieldset>
        <label for=""><strong> Seu nome:</strong></label>
        <input type="text" name="nome_user"><br><br>
        <label><strong>Nome de usuário:</strong></label>
        <input type="text" name="user" id="" required>
        <label><strong>Senha:</strong></label>
        <input type="password" name="senha" id="" required><br><br>
        <label for=""><strong>Você sabe Libras?</strong></label>
        <input type="radio" name="sabe" value="Sim" required> SIM
        <input type="radio" name="sabe" value="Não" required> NÃO
        <label for=""><strong>Fez algum curso?</strong></label>
        <input type="radio" name="curso" value="Sim" required> SIM
        <input type="radio" name="curso" value="Não" required> NÃO<br><br>
        <label for=""><strong>Explique em poucas palavras por que você quer fazer parte do Librator.</strong></label><br><br>
        <textarea rows="8" cols="26" name="caixa" maxlength="150" required></textarea>
        <input type="submit" name="bt_envio" data-toggle="modal" data-target="#exampleModalCenter" value="Enviar">
        </fieldset>
        

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
             <h5 class="modal-title" id="exampleModalCenterTitle">Mensagem de sucesso</h5>
              </button>
             </div>
             <div class="modal-body">
                Cadastro enviado com sucesso!
             </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                
             </div>
            </div>
        </div>
        </div>
    </form>
    </div>
    

</body>
</html>