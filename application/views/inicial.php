<?php
    $this->load->view('header');
?>
<br><br>
<div class="text-center">
    <h1><strong><em>Tradutor</em></strong></h1><br><br>
    <form action="<?php echo base_url('tradutor') ?>" method="post">
    <label  class="tes"><strong>Digite o que você deseja traduzir:</strong></label><br><br>
    <input type="text"  name= "paratraduzir" rows="8" cols="26" required>
    <input type="submit" class="btn btn-default" value="Traduzir"><br><br> 
    

    <?php 
        $cont = 0;
        if (isset($traduzidos)) {
            // print_r(sizeof($traduzidos));
            foreach ($traduzidos as $value) {
                // print_r($value);
                foreach ($value as $result) { $cont++; ?>
                    
                    <div>
                    <div><?php 
                    print_r($result['nm_palavra']); 
                    ?> </div>
                    <div><?php
                    print_r($result['desc_significado']);
                    ?> </div>
                    <img class ="tra" src="<?php print_r($result['end_video']); ?>" alt="">
                </div>
                    
                <?php }
                

            }
            // print_r($cont);
        }
        if($cont==0 && isset($traduzidos)){ ?>
            <div class="alert alert-warning alerta-d" role="alert"> Gif não encontrado </div>
            <?php } ?>
            

 
   


    </form>
    </div>
    
</body>
</html>