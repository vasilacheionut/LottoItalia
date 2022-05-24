<?php
  $title = "Update User";
  include "header.php";  
?>

<?php if ($user->is_login() && $user->getRole() == 2) : ?>                             
<div class="container">
  <div class="row">
    <h1>Qui edita users!</h1>
    <h4>Da portare da projecto users</h4>
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