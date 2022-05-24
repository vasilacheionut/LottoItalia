<?php
  $title = "Configura";
  include "header.php";
?>
<?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $ruota_selezionata_read_single = $ruota_selezionata->read_single($user->getId());
      $ruote_id = $_POST['ruota_id'];
      $id       = $ruota_selezionata_read_single[0]['id'];        
      $ruota_selezionata->update($ruote_id, $id);
      $location = "configura.php";      
      header("location:$location");
    }

    $ruote_read = $ruote->read();
    $ruota_selezionata_read_single = $ruota_selezionata->read_single($user->getId());
    $user_id  = $ruota_selezionata_read_single[0]['user_id'];
    $ruote_id = $ruota_selezionata_read_single[0]['ruote_id'];
    $id       = $ruota_selezionata_read_single[0]['id'];   
    $ultimo_aggiornamento  = $ruota_selezionata_read_single[0]['ultimo_aggiornamento'];       
?>

<div class="container">
  <h5>Ultimo Aggiornamento <?= $ultimo_aggiornamento; ?></h5>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="row">
      <div class="col-sm-8 col-md-8">
        <?php
            foreach ($ruote_read as $key) {
              if($key['id'] == $ruote_id){
                $checked = 'checked';
              } else {$checked = '';}
              echo '<div class="form-check">';
              echo '<input class="form-check-input" type="radio" name="ruota_id" id="'.$key['id'].'" value="'.$key['id'].'" '.$checked.'>';
              echo '<label class="btn btn-info btn-block" name="nome" for="'.$key['id'].'">';
              echo $key['nome'];
              echo '</label>';        
              echo '</div>';
            }
        ?>           
      </div>
      <div class="col-sm-4 col-md-4" >
          <button type="submit" name="save" class="btn btn-success btn-block">Salva Ruota</button>
      </div>
    </div>
  </form>
</div>


<?php
  include "footer.php";
?>