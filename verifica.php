<?php
$title = "Verifica";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $verifica = $_POST['verifica'];
  $verifica_min = $_POST['verifica_min'];
  $verifica_max = $_POST['verifica_max'];
} else {
  $verifica = '';
  $verifica_min = 3;
  $verifica_max = 5;
}
include "header.php";

$result_verifica = $ruote_nome_archivio->verifica($verifica, $verifica_min, $verifica_max);
?>

<div class="row">
  <div class="col-sm-3">
    <table class="table table-bordered text-nowrap table-sm text-center ">
      <tbody>
        <tr>
          <td id="rN1" class="pN1" onclick="SelectN(this.innerHTML)">1</td>
          <td id="rN2" class="pN2" onclick="SelectN(this.innerHTML)">2</td>
          <td id="rN3" class="pN3" onclick="SelectN(this.innerHTML)">3</td>
          <td id="rN4" class="pN4" onclick="SelectN(this.innerHTML)">4</td>
          <td id="rN5" class="pN5" onclick="SelectN(this.innerHTML)">5</td>
          <td id="rN6" class="pN6" onclick="SelectN(this.innerHTML)">6</td>
          <td id="rN7" class="pN7" onclick="SelectN(this.innerHTML)">7</td>
          <td id="rN8" class="pN8" onclick="SelectN(this.innerHTML)">8</td>
          <td id="rN9" class="pN9" onclick="SelectN(this.innerHTML)">9</td>
          <td id="rN10" class="pN10" onclick="SelectN(this.innerHTML)">10</td>
        </tr>

        <tr>
          <td id="rN11" class="pN11" onclick="SelectN(this.innerHTML)">11</td>
          <td id="rN12" class="pN12" onclick="SelectN(this.innerHTML)">12</td>
          <td id="rN13" class="pN13" onclick="SelectN(this.innerHTML)">13</td>
          <td id="rN14" class="pN14" onclick="SelectN(this.innerHTML)">14</td>
          <td id="rN15" class="pN15" onclick="SelectN(this.innerHTML)">15</td>
          <td id="rN16" class="pN16" onclick="SelectN(this.innerHTML)">16</td>
          <td id="rN17" class="pN17" onclick="SelectN(this.innerHTML)">17</td>
          <td id="rN18" class="pN18" onclick="SelectN(this.innerHTML)">18</td>
          <td id="rN19" class="pN19" onclick="SelectN(this.innerHTML)">19</td>
          <td id="rN20" class="pN20" onclick="SelectN(this.innerHTML)">20</td>
        </tr>

        <tr>
          <td id="rN21" class="pN21" onclick="SelectN(this.innerHTML)">21</td>
          <td id="rN22" class="pN22" onclick="SelectN(this.innerHTML)">22</td>
          <td id="rN23" class="pN23" onclick="SelectN(this.innerHTML)">23</td>
          <td id="rN24" class="pN24" onclick="SelectN(this.innerHTML)">24</td>
          <td id="rN25" class="pN25" onclick="SelectN(this.innerHTML)">25</td>
          <td id="rN26" class="pN26" onclick="SelectN(this.innerHTML)">26</td>
          <td id="rN27" class="pN27" onclick="SelectN(this.innerHTML)">27</td>
          <td id="rN28" class="pN28" onclick="SelectN(this.innerHTML)">28</td>
          <td id="rN29" class="pN29" onclick="SelectN(this.innerHTML)">29</td>
          <td id="rN30" class="pN30" onclick="SelectN(this.innerHTML)">30</td>
        </tr>

        <tr>
          <td id="rN31" class="pN31" onclick="SelectN(this.innerHTML)">31</td>
          <td id="rN32" class="pN32" onclick="SelectN(this.innerHTML)">32</td>
          <td id="rN33" class="pN33" onclick="SelectN(this.innerHTML)">33</td>
          <td id="rN34" class="pN34" onclick="SelectN(this.innerHTML)">34</td>
          <td id="rN35" class="pN35" onclick="SelectN(this.innerHTML)">35</td>
          <td id="rN36" class="pN36" onclick="SelectN(this.innerHTML)">36</td>
          <td id="rN37" class="pN37" onclick="SelectN(this.innerHTML)">37</td>
          <td id="rN38" class="pN38" onclick="SelectN(this.innerHTML)">38</td>
          <td id="rN39" class="pN39" onclick="SelectN(this.innerHTML)">39</td>
          <td id="rN40" class="pN40" onclick="SelectN(this.innerHTML)">40</td>
        </tr>

        <tr>
          <td id="rN41" class="pN41" onclick="SelectN(this.innerHTML)">41</td>
          <td id="rN42" class="pN42" onclick="SelectN(this.innerHTML)">42</td>
          <td id="rN43" class="pN43" onclick="SelectN(this.innerHTML)">43</td>
          <td id="rN44" class="pN44" onclick="SelectN(this.innerHTML)">44</td>
          <td id="rN45" class="pN45" onclick="SelectN(this.innerHTML)">45</td>
          <td id="rN46" class="pN46" onclick="SelectN(this.innerHTML)">46</td>
          <td id="rN47" class="pN47" onclick="SelectN(this.innerHTML)">47</td>
          <td id="rN48" class="pN48" onclick="SelectN(this.innerHTML)">48</td>
          <td id="rN49" class="pN49" onclick="SelectN(this.innerHTML)">49</td>
          <td id="rN50" class="pN50" onclick="SelectN(this.innerHTML)">50</td>
        </tr>

        <tr>
          <td id="rN51" class="pN51" onclick="SelectN(this.innerHTML)">51</td>
          <td id="rN52" class="pN52" onclick="SelectN(this.innerHTML)">52</td>
          <td id="rN53" class="pN53" onclick="SelectN(this.innerHTML)">53</td>
          <td id="rN54" class="pN54" onclick="SelectN(this.innerHTML)">54</td>
          <td id="rN55" class="pN55" onclick="SelectN(this.innerHTML)">55</td>
          <td id="rN56" class="pN56" onclick="SelectN(this.innerHTML)">56</td>
          <td id="rN57" class="pN57" onclick="SelectN(this.innerHTML)">57</td>
          <td id="rN58" class="pN58" onclick="SelectN(this.innerHTML)">58</td>
          <td id="rN59" class="pN59" onclick="SelectN(this.innerHTML)">59</td>
          <td id="rN60" class="pN60" onclick="SelectN(this.innerHTML)">60</td>
        </tr>

        <tr>
          <td id="rN61" class="pN61" onclick="SelectN(this.innerHTML)">61</td>
          <td id="rN62" class="pN62" onclick="SelectN(this.innerHTML)">62</td>
          <td id="rN63" class="pN63" onclick="SelectN(this.innerHTML)">63</td>
          <td id="rN64" class="pN64" onclick="SelectN(this.innerHTML)">64</td>
          <td id="rN65" class="pN65" onclick="SelectN(this.innerHTML)">65</td>
          <td id="rN66" class="pN66" onclick="SelectN(this.innerHTML)">66</td>
          <td id="rN67" class="pN67" onclick="SelectN(this.innerHTML)">67</td>
          <td id="rN68" class="pN68" onclick="SelectN(this.innerHTML)">68</td>
          <td id="rN69" class="pN69" onclick="SelectN(this.innerHTML)">69</td>
          <td id="rN70" class="pN70" onclick="SelectN(this.innerHTML)">70</td>
        </tr>

        <tr>
          <td id="rN71" class="pN71" onclick="SelectN(this.innerHTML)">71</td>
          <td id="rN72" class="pN72" onclick="SelectN(this.innerHTML)">72</td>
          <td id="rN73" class="pN73" onclick="SelectN(this.innerHTML)">73</td>
          <td id="rN74" class="pN74" onclick="SelectN(this.innerHTML)">74</td>
          <td id="rN75" class="pN75" onclick="SelectN(this.innerHTML)">75</td>
          <td id="rN76" class="pN76" onclick="SelectN(this.innerHTML)">76</td>
          <td id="rN77" class="pN77" onclick="SelectN(this.innerHTML)">77</td>
          <td id="rN78" class="pN78" onclick="SelectN(this.innerHTML)">78</td>
          <td id="rN79" class="pN79" onclick="SelectN(this.innerHTML)">79</td>
          <td id="rN80" class="pN80" onclick="SelectN(this.innerHTML)">80</td>
        </tr>

        <tr>
          <td id="rN81" class="pN81" onclick="SelectN(this.innerHTML)">81</td>
          <td id="rN82" class="pN82" onclick="SelectN(this.innerHTML)">82</td>
          <td id="rN83" class="pN83" onclick="SelectN(this.innerHTML)">83</td>
          <td id="rN84" class="pN84" onclick="SelectN(this.innerHTML)">84</td>
          <td id="rN85" class="pN85" onclick="SelectN(this.innerHTML)">85</td>
          <td id="rN86" class="pN86" onclick="SelectN(this.innerHTML)">86</td>
          <td id="rN87" class="pN87" onclick="SelectN(this.innerHTML)">87</td>
          <td id="rN88" class="pN88" onclick="SelectN(this.innerHTML)">88</td>
          <td id="rN89" class="pN89" onclick="SelectN(this.innerHTML)">89</td>
          <td id="rN90" class="pN90" onclick="SelectN(this.innerHTML)">90</td>
        </tr>

      </tbody>
    </table>
  </div>

  <div class="col-sm-2">  
    <div class="btn-toolbar">
      <div class="btn-group">
        <button class="btn btn-danger my-2 my-sm-0" id="clear" onclick="ClearN()"><i class="fa-solid fa-trash"></i> <span id="clear_nr">0 </span></button>
      </div>
    </div>
  </div>

  <div class="col-sm-2">  
    <div class="btn-toolbar">
      <div class="btn-group">
      <form class="form-inline my-2 my-lg-0" action="verifica.php" method="post">
        <div class="btn-toolbar">
          <input type="number" class="form-control text-center" id="verifica_min" name="verifica_min" value="<?= $verifica_min; ?>" min="0" max="5">
          <input type="text" class="form-control text-center" value="/" style="width:30px" readonly>
          <input type="number" class="form-control text-center" id="verifica_max" name="verifica_max" value="<?= $verifica_max; ?>" min="0" max="5">
          <input class="form-control mr-sm-2" type="text" id='verifica' name='verifica' placeholder="Ruota <?= $nome; ?> : 1,2,3,4,5" aria-label="verifica" value="<?= $verifica; ?>" readonly hidden>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Verifica</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  <div class="col-sm">
    <div id="overflowNumberList">
      
    <div class="alert alert-light" role="alert">
      Colore
      <div class="btn-toolbar">
        <div class="btn-group">
          <button type="button" class="btn  rN_Red" onclick="SelectC('rN_Red')">34</button>
          <button type="button" class="btn  rN_Green" onclick="SelectC('rN_Green')">26</button>
          <button type="button" class="btn  rN_Blue" onclick="SelectC('rN_Blue')">18</button>
          <button type="button" class="btn  rN_Black" onclick="SelectC('rN_Black')">10</button>
          <button type="button" class="btn  rN_Grey" onclick="SelectC('rN_Grey')">2</button>
        </div>
      </div>
    </div>    

    <div class="alert alert-light" role="alert">
      Distanza    
      <div class="btn-toolbar">
        <div class="btn-group">
          <button type="button" class="btn  btn-secondary" onclick="Distanza(this.innerHTML)">0</button>
          <button type="button" class="btn  btn-secondary" onclick="Distanza(this.innerHTML)">1</button>
          <button type="button" class="btn  btn-secondary" onclick="Distanza(this.innerHTML)">2</button>
          <button type="button" class="btn  btn-secondary" onclick="Distanza(this.innerHTML)">3</button>
          <button type="button" class="btn  btn-secondary" onclick="Distanza(this.innerHTML)">4</button>
          <button type="button" class="btn  btn-secondary" onclick="Distanza(this.innerHTML)">5</button>
          <button type="button" class="btn  btn-secondary" onclick="Distanza(this.innerHTML)">6</button>
          <button type="button" class="btn  btn-secondary" onclick="Distanza(this.innerHTML)">7</button>
          <button type="button" class="btn  btn-secondary" onclick="Distanza(this.innerHTML)">8</button>
          <button type="button" class="btn  btn-secondary" onclick="Distanza(this.innerHTML)">9</button>
        </div>
      </div>
    </div>            


        
    </div>  
  </div>

</div>

<br>
<div id="overflowTest" class="overflow-auto">
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
        <th scope="col">Found</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($result_verifica as $key) {
        echo "<tr>";
        echo '<td>' . $key['id'] . '</td>';
        echo '<td>' . $key['ruota'] . '</td>';
        echo '<td>' . $key['data'] . '</td>';
        echo '<td class="rN' . $key['n1'] . '">' . $key['n1'] . '</td>';
        echo '<td class="rN' . $key['n2'] . '">' . $key['n2'] . '</td>';
        echo '<td class="rN' . $key['n3'] . '">' . $key['n3'] . '</td>';
        echo '<td class="rN' . $key['n4'] . '">' . $key['n4'] . '</td>';
        echo '<td class="rN' . $key['n5'] . '">' . $key['n5'] . '</td>';
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
        echo '<td>' . $key['Found'] . '</td>';
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</div>
</div>

<script>
  const input = document.getElementById('verifica');
  const end = input.value.length;

  input.setSelectionRange(end, end);
  input.focus();
</script>

<?php
include "footer.php";
?>