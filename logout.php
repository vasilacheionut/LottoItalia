<?php 
  $title = "Logout";
  include "header.php"; 
  $location = 'login.php';  
?>
<?php
  $user->logout();
  header("location:$location");
?>

<?php
  include "footer.php";
?>
