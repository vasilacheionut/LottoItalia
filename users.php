<?php
    $title = "Users";
    include "header.php";
?>
<?php
    $location = "login.php";
    if ($user->getRole() != 2){
      header("location:$location");
    }    

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $result_array = $user->read_single($id);
    }else {
        $result_array = $user->read();
    }
?>

<div class="table-responsive">
  <table class="table table-hover table-bordered table-sm  text-center">      
    <thead class='thead-dark'>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Display Name</th>
        <th scope="col">Email</th>
        <th scope="col">Hash Password</th>
        <?php if ($user->is_login()) : ?>
          <th scope="col" colspan="2"></th>
        <?php endif; ?>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($result_array as $key) {
        echo "<tr>";
        echo '<td scope="row">' . $key['id'] . '</td>';
        echo '<td>' . $key['firstname'] . '</td>';
        echo '<td>' . $key['lastname'] . '</td>';
        echo '<td>' . $key['displayname'] . '</td>';
        echo '<td>' . '<a href="mailto:' . $key['email'] . '">' . $key['email'] . '</a>'  . '</td>';
        echo '<td>' . $key['password'] . '</td>';
        if ($user->is_login()) {
            echo '<td>' . "<a href='users_update.php?id=" . $key['id'] . "' class='text-info' type='submit'><i class='fas fa-pencil-alt'></i></a>" . '</td>';
        }
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<?php
    include "footer.php";
?>