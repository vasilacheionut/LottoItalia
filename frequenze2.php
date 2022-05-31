<?php
  $title = "Frequenze 2";
  include "header.php";
  $frequenza = 2;
  $frequenze->setTable($ruota, $frequenza);  
  $result_frequenze = $frequenze->read();  
?>

  <div class="table-responsive">
    <table class="table  table-hover table-bordered table-sm text-center">      
      <thead class='thead-dark'>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Ruota</th>          
          <th scope="col" class="col">Data</th>
          <th scope="col">N1</th>
          <th scope="col">N2</th>
          <th scope="col">Frequenza</th>	          
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($result_frequenze as $key) {
          echo "<tr>";
            echo '<td>' . $key['id'] . '</td>';
            echo '<td>' . $key['ruota'] . '</td>';            
            echo '<td>' . $key['data'] . '</td>';
            echo '<td class="rN'. $key['n1'] .'">' . $key['n1'] . '</td>';
            echo '<td class="rN'. $key['n2'] .'">' . $key['n2'] . '</td>';                                   
            echo '<td>' . $key['frequenza'] . '</td>';
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

<?php
  include "footer.php";
?>