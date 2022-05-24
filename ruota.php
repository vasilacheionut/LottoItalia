<?php
  $title = "Ruota";
  include "header.php";  
?>

<?php 
  $max_on_page = 1000;
  $count_maxim  = $ruote_nome_archivio->count_maxim();
  $max_pages = $count_maxim / $max_on_page;

  //----------------------------------------------------
  if(isset($_GET['page'])){ $page = $_GET['page']; } else {$page = $max_pages;}
  //-----
  if(isset($_GET['page']) && isset($_GET['previous']) ){$page = intval($_GET['page']); --$page; }
  if(isset($_GET['page']) && isset($_GET['next']) ){ $page = intval($_GET['page']);  ++$page;  }
  //-----
  if ($page <= 1){ $page = 1; }
  if ($page >= $max_pages){ $page = $max_pages;}
  //----------------------------------------------------  

  //----------------------------------------------------
  if(isset($_GET['first']) ){ $page = 1;}
  if(isset($_GET['last'])  ){ $page = $max_pages;}
  //----------------------------------------------------
  $selectedpage = $page * $max_on_page;

  $result_read = $ruote_nome_archivio->read($max_on_page, $selectedpage);    
?>
      <div class="table-responsive text-uppercase">
        <table class="table table-hover table-striped table-bordered text-nowrap table-sm text-center ">      
          <thead class='thead-dark'>
            <tr>       
              <th scope="col">#</th>
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
            foreach ($result_read as $key) {              
              echo "<tr>";            
                echo '<td>' . $key['id'] . '</td>';
                echo '<td>' . $key['ruota'] . '</td>';            
                echo '<td>' . $key['data'] . '</td>';
                echo '<td class="rN'. $key['n1'] .'">' . $key['n1'] . '</td>';
                echo '<td class="rN'. $key['n2'] .'">' . $key['n2'] . '</td>';
                echo '<td class="rN'. $key['n3'] .'">' . $key['n3'] . '</td>';
                echo '<td class="rN'. $key['n4'] .'">' . $key['n4'] . '</td>';
                echo '<td class="rN'. $key['n5'] .'">' . $key['n5'] . '</td>';                    
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
  <br>
  <br>
  <br>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <nav class="navbar navbar-brand justify-content-center fixed-bottom">
    <ul class="pagination pagination-sm justify-content-center">
      <li class="page-item"><a class="page-link" href="?first"><span aria-hidden="true">&laquo;</span></a></li>
      <li class="page-item"><a class="page-link" href="?page=<?=$page?>&previous">Previous</a></li>      
      <?php 
          $pages_nr = 4;
          if ($pages_nr >= intval($max_pages)){
            $pages_nr = intval($max_pages)-1;
          }
          $start = intval($page);
          $stop  = $start + $pages_nr;
          if ($stop >= intval($max_pages)) {$stop  = intval($max_pages); $start  = $stop - $pages_nr;}

          if (intval($page) <= 1) {$start = 1; $stop = $start + $pages_nr;} else {}
          if (intval($page) >= intval($max_pages)) {$stop = intval($max_pages); $start = $stop - $pages_nr;} else {}
          if($page > intval($page)){$active_max = "active"; } else {$active_max = ""; }
          for ($i=$start; $i <= $stop ; $i++) { 
            if($page == $i ){$active = "active"; } else {$active = ""; }
      ?>  
      <li class="page-item  <?=$active;?>"><a class="page-link" href="?page=<?=$i;?>"><?=$i;?></a></li>
      <?php }?>      
      <li class="page-item"><a class="page-link" href="?page=<?=$page?>&next">Next</a></li>      
      <li class="page-item <?= $active_max; ?>"><a class="page-link" href="?last"><span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>          
  </nav>  
  </form>

<?php
  include "footer.php";
?>