<?php
    $this->load->view('header');
?>
<br><br>
<div class="text-center">
    <h1><strong><em>Tradutor</em></strong></h1><br><br>
    <form action="<?php echo base_url('tradutor') ?>" method="post">
    <label for=""><strong>Digite o que você deseja traduzir:</strong></label><br><br>
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
        if($cont==0 && isset($traduzidos)){
            echo("Gif não encontrado");
        }
    
    ?>

 
   


    </form>
    </div>
    <!-- <script src="assets/bootstrap/js/bootstrap.js"></script> -->
    <!-- <script src="assets/bootstrap/js/bootstrap.bundle.js"></script> -->

    <!-- <script src="assets/bootstrap/js/bootstrap.bundle.js.map"></script> -->
    <!-- <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <!-- <script src="assets/bootstrap/js/bootstrap.bundle.min.js.map"></script> -->

    <!-- <script src="assets/bootstrap/js/jquery-3.4.1.min.js"></script> -->

    <!-- <script src="assets/bootstrap/js/bootstrap.js.map"></script> -->
    <!-- <script src="assets/bootstrap/js/bootstrap.min.js"></script> -->
    <!-- <script src="assets/bootstrap/js/bootstrap.min.js.map"></script> -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>