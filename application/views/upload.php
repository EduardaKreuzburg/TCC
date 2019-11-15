
    <?php
    $this->load->view('header');
?><br>

  <div class="text-center">
<h1> <em> Manipulação de GIF </em></h1>

<p>
  <a  data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><img name="adc" src="<?php base_url() ?>assets/img/adc.png" alt=""></a>
  <a  data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2"><img name="lixo" src="<?php base_url() ?>assets/img/lixo.png" alt=""></a>
  
</p>
<!-- Adicionar video -->
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
      <form action="<?php echo base_url('salva') ?>" method="post" enctype="multipart/form-data">
      <fieldset class="adc">
      <label  class="tes" for=""><strong>Adicionar Vídeo:</strong></label><br>
               <!-- ainda tem q associar video, palavra, significado e usuario -->
               <!-- ainda tem q associar video, palavra, significado e usuario -->
               <!-- ainda tem q associar video, palavra, significado e usuario -->
               <!-- ainda tem q associar video, palavra, significado e usuario -->
               <!-- ainda tem q associar video, palavra, significado e usuario -->
               <!-- ainda tem q associar video, palavra, significado e usuario -->
               <!-- ainda tem q associar video, palavra, significado e usuario -->
        <input type="file" name="arquivo" id="" required><br><br>
        <label for="">Nome do GIF: </label><br>
        <input type="text" name="palavra" required><br><br>
        <label for="">Significado do nome GIF:</label><br>
        <input type="text" name="sig" required><br><br>
          <input type="submit" value="Enviar"><br><br>
        </form>
      <!-- remove video -->
        </fieldset>
      </div>
    </div>
  </div>
  <div class="col ajuste_upload">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
      <form action="<?php echo base_url('removendo') ?>" method="post">
      <fieldset class="remove">
      <label class="tes" for=""><strong>Selecione o vídeo que deseja remover:</strong></label><br>
      <select name="escolharemocao" required>
        <?php foreach ($pega as $row) {?>
            <option value="<?php echo $row->id_video ?>"> <?php echo $row->nm_video ?> </option>
        <?php }  ?>
        
      </select>
      <input type="submit" value="Remover"><br><br>
      </fieldset>
      </form>
      </div>
    </div>
  </div>
</div>
</div>


</body>
</html>