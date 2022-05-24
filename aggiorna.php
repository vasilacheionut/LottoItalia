<?php
  $title = "Aggiornamento";
  include "header.php";  
  $sleep = 0.5;
  $progress = 0;
  $$progress_next = 0;
  //echo "Sleep ". $sleep;
  sleep($sleep);  
?>

<div class="row">
  <div class="col-sm">
    <div class="progress">
        <div class="progress-bar bg-success" id="progressbar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="11">0%</div>
    </div>    
  </div>
  <div class="col-sm">
  <form action="" method="post">
      <button type="submit" class="float-right btn btn-warning" name="update">Aggiorna Ruote</button>  
  </form>    
  </div>  
</div>

<?php if ($user->is_login() && $user->getRole() == 2) : ?>                             

<div class="container">
  <div class="row">
     <?php
      if ($user->is_login() && $user->getRole() == 2 && isset($_POST['update'])){
          $result_ruote_read = $ruote->read();
          foreach ($result_ruote_read as $key) {
            ++$progress_next;
            ob_flush();  flush();                 
            $ruote_nome_archivio->create_ruota($key['id'],$key['ruota']);    
              echo "Created Ruota ". $key['ruota'] ." ". $key['nome'] . '<br/>';   sleep($sleep);       
            $ruote_nome_archivio->frequenze_5($key['id'],$key['ruota']);
              echo "Created frequenze_5 ". $key['ruota'] ." ". $key['nome'] . '<br/>';   sleep($sleep);         
            $ruote_nome_archivio->frequenze_4($key['id'],$key['ruota']);
              echo "Created frequenze_4 ". $key['ruota'] ." ". $key['nome'] . '<br/>';   sleep($sleep);                              
            $ruote_nome_archivio->frequenze_3($key['id'],$key['ruota']);          
              echo "Created frequenze_3 ". $key['ruota'] ." ". $key['nome'] . '<br/>';   sleep($sleep);                            
            $ruote_nome_archivio->frequenze_2($key['id'],$key['ruota']);          
              echo "Created frequenze_2 ". $key['ruota'] ." ". $key['nome'] . '<br/>';   sleep($sleep);           
            $ruote_nome_archivio->frequenze_1($key['id'],$key['ruota']);          
              echo "Created frequenze_1 ". $key['ruota'] ." ". $key['nome'] . '<br/>';   sleep($sleep);       
              $progress = ($progress_next/11) * 100; 
              //echo ($progress*100).'<br>'; 
            echo "
            <script>
                document.getElementById('progressbar').style = 'width:$progress%';   
                document.getElementById('progressbar').innerHTML = '$progress%';         
            </script>
            ";                            
          }        
      }        
     ?>
  </div>
</div>

<?php else : ?>
<?php
  $location = "index.php";
  header("location:$location");
?>
<?php endif; ?>   


<?php
  include "footer.php";
?>
