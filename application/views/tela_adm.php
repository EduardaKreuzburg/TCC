<?php
    $this->load->view('header');
?>
<br><br><br>
    
      
    <div class="row justify-content-around">
        
    <div class="text-center">
    <form action="<?php  echo base_url('rota'); ?>" method="post">
    <h2 class="text-center"><em> Controle dos administradores</em></h2><br>  
        <table  class="table table-hover table-light">
            <tr>
            <thead>
                <th> Nome </th>
                <th> Usuário </th>
                <th> Sabe LIBRAS? </th>
                <th> Tem curso? </th>
                <th> Justificativa </th>
                <th> Aceitar? </th>
                <th> Rejeitar? </th>
            </thead>
            </tr>
                       
               
        <?php  foreach ($chama as $row) { ?>
            <tr>
                <td><?php echo $row->nm_nome; ?></td>
                <td><?php echo $row->nnm_usuario; ?></td>
                <td><?php echo $row->sabe_libras; ?></td>
                <td><?php echo $row->tem_curso; ?></td>
                <td><?php echo $row->caixa; ?></td>
                <td> <button name="Aceito" class="btn btn-outline-secondary" value="<?php echo $row->id_us; ?>">Aceitar</button> </td>
                <td> <button name="Negado" class="btn btn-outline-danger" value="<?php echo $row->id_us; ?>">Rejeitar</button> </td>
            </tr>
        <?php } ?>

        </table>
        
    </form>
    </div>
   

           

    </div>


</body>

</html>