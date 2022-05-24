<?php
  $title = "Test Page";
  include "header.php";  
?>
<h1>Test Page</h1>

<?php  
  $result_ruota_selezionata = $ruote_nome_archivio->ruota_selezionata(1);
  echo "<pre>";
    var_dump($ruote_nome_archivio);
    var_dump($result_ruota_selezionata);    
  echo "</pre>";  
?>


<?php
  include "footer.php";
?>