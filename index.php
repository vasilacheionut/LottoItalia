<?php
  $title = "Home";
  include "header.php";  
?>

<?php 
    $result_read_limit = $ruote_archivio->read_limit();
?>



      <div class="table-responsive text-uppercase">
        <table class="table table-hover table-bordered text-nowrap table-sm text-center">      
          <thead class='thead-dark'>
            <tr>       
              <!--th scope="col">#</th-->
              <th scope="col">Ruota</th>
              <th scope="col">Data</th>
              <th scope="col">N1</th>
              <th scope="col">N2</th>
              <th scope="col">N3</th>
              <th scope="col">N4</th>
              <th scope="col">N5</th>
              <th scope="col">vn</th>
              <th scope="col">vc</th>
              <th scope="col">d1</th>
              <th scope="col">d2</th>
              <th scope="col">d3</th>
              <th scope="col">d4</th>
              <th scope="col">d5</th>
              <th scope="col">dp</th>
              <th scope="col">di</th>
              <th scope="col">v1</th>
              <th scope="col">v2</th>
              <th scope="col">v3</th>
              <th scope="col">v4</th>
              <th scope="col">v5</th>      
              <th scope="col">c1_1</th>      
              <th scope="col">c1_2</th>      
              <th scope="col">c1_3</th>      
              <th scope="col">c1_4</th>      
              <th scope="col">c1_5</th>      
              <th scope="col">c1_6</th>      
              <th scope="col">c1_7</th>      
              <th scope="col">c1_8</th>      
              <th scope="col">c1_9</th>      
              <th scope="col">c2_0</th>      
              <th scope="col">c2_1</th>      
              <th scope="col">c2_2</th>      
              <th scope="col">c2_3</th>      
              <th scope="col">c2_4</th>      
              <th scope="col">c2_5</th>      
              <th scope="col">c2_6</th>      
              <th scope="col">c2_7</th>      
              <th scope="col">c2_8</th>      
              <th scope="col">c2_9</th>      
            </tr>
          </thead>
          <tbody>
            <?php        
            foreach ($result_read_limit as $key) {
              if($key['ruota'] == $ruota){$info = 'table-danger';} else {$info = '';}              
              echo "<tr class='$info'>";              
                //echo '<td>' . $key['id'] . '</td>';
                echo '<td>' . $key['ruota'] . '</td>';            
                echo '<td>' . $key['data'] . '</td>';
                echo '<td id="rN"  class="rN'. $key['n1'] .'">' . $key['n1'] . '</td>';
                echo '<td id="rN"  class="rN'. $key['n2'] .'">' . $key['n2'] . '</td>';
                echo '<td id="rN"  class="rN'. $key['n3'] .'">' . $key['n3'] . '</td>';
                echo '<td id="rN"  class="rN'. $key['n4'] .'">' . $key['n4'] . '</td>';
                echo '<td id="rN"  class="rN'. $key['n5'] .'">' . $key['n5'] . '</td>';                  
                echo '<td>' . $key['vn'] . '</td>';     
                echo '<td>' . $key['vc'] . '</td>';     
                echo '<td>' . $key['d1'] . '</td>';
                echo '<td>' . $key['d2'] . '</td>';   
                echo '<td>' . $key['d3'] . '</td>';     
                echo '<td>' . $key['d4'] . '</td>';                        
                echo '<td>' . $key['d5'] . '</td>';   
                echo '<td>' . $key['dp'] . '</td>';   
                echo '<td>' . $key['di'] . '</td>';   
                echo '<td>' . $key['v1'] . '</td>';
                echo '<td>' . $key['v2'] . '</td>';   
                echo '<td>' . $key['v3'] . '</td>';     
                echo '<td>' . $key['v4'] . '</td>';                        
                echo '<td>' . $key['v5'] . '</td>';        
                echo '<td>' . $key['c1_1'] . '</td>';        
                echo '<td>' . $key['c1_2'] . '</td>';        
                echo '<td>' . $key['c1_3'] . '</td>';        
                echo '<td>' . $key['c1_4'] . '</td>';        
                echo '<td>' . $key['c1_5'] . '</td>';        
                echo '<td>' . $key['c1_6'] . '</td>';        
                echo '<td>' . $key['c1_7'] . '</td>';        
                echo '<td>' . $key['c1_8'] . '</td>';        
                echo '<td>' . $key['c1_9'] . '</td>';        
                echo '<td>' . $key['c2_0'] . '</td>';        
                echo '<td>' . $key['c2_1'] . '</td>';        
                echo '<td>' . $key['c2_2'] . '</td>';        
                echo '<td>' . $key['c2_3'] . '</td>';        
                echo '<td>' . $key['c2_4'] . '</td>';        
                echo '<td>' . $key['c2_5'] . '</td>';        
                echo '<td>' . $key['c2_6'] . '</td>';        
                echo '<td>' . $key['c2_7'] . '</td>';        
                echo '<td>' . $key['c2_8'] . '</td>';        
                echo '<td>' . $key['c2_9'] . '</td>';                    
                                  
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>      
            
      
<?php
  include "footer.php";
?>