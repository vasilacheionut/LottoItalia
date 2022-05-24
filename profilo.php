<?php
$title = "profilo";
include "header.php";
?>
<?php
$location = 'profilo.php';
$id = $user->getId();
$result_array = $user->read_single($id);

$mesaj_nuova_password = $mesaj_vechia_password = "";

if (isset($_POST['file'])) {
    $image = $_POST['file'];
} else {
    $image = 'no-image-available.png';
}

if (isset($_POST['update_image'])) {
    $user->updateImage($id, "profilo/" . $image);
    $user->login($_SESSION["username"], $_SESSION["password"]);
}

if (isset($_POST['save_user'])) {
    $oldPassword = hash('sha256', $_POST['oldPassword']);
    if ($user->verifyHashPassword($id, $_POST['oldPassword'])) {
        $newPassword = $_POST['newPassword'];
        $user->updatePassword($id, $newPassword);
        $_SESSION["username"] = $user->getEmail();
        $_SESSION["password"] = $newPassword;
        $user->login($_SESSION["username"], $_SESSION["password"]);
        $mesaj_nuova_password = '
            <div class="alert alert-dismissible alert-success">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <h4 class="alert-heading">Congratulazioni!</h4>
                  <p class="mb-0">Password cambiata!</p>
            </div>        
        ';           
    } else{
        $mesaj_vechia_password = '
            <div class="alert alert-dismissible alert-warning">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <h4 class="alert-heading">Atenzione!</h4>
                  <p class="mb-0">Inserisci la vechia password!</p>
            </div>        
        ';
    }
} else {
    foreach ($result_array as $key) {
        $firstname = $key['firstname'];
        $lastname  = $key['lastname'];
        $email = $key['email'];
        $password =  '';
    }
}
?>

<div class="row down-space">
    <div class="col-md-2">
        <div class="profilo-img">
            <img class="w100" src="<?= $user->getImage(); ?>" alt="<?= $user->getImage(); ?>" />
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                <div class="btn btn-sm btn-block btn-primary">
                    Cambia Foto
                    <input type="file" name="file" />
                </div>
                <button type='submit' name='update_image' class='btn form-control btn-info  text-center'><i class='fas fa-save'> Salva Imagine</i></button>
            </form>
        </div>
    </div>
    <div class="col-md-5">
        <div class="profilo-head">
            <?php foreach ($result_array as $key) { ?>
                <h5>
                    <?= $key['displayname']; ?>
                </h5>
                <h6>
                    Email: <?php echo  '<a href="mailto:' . $key['email'] . '">' . $key['email'] . '</a>'; ?>
                </h6>
            <?php  } ?>
        </div>
    </div>
    <div class="col-md-5">
        <div class="table-responsive text-uppercase">
            <table class="table table-bordered text-nowrap table-sm text-center ">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Hash Password </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td><span><?= $key['password']; ?></span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table">
            <table class="table  table-hover table-bordered text-center">
                <thead class='thead-dark'>
                    <tr>
                        <th scope="col">Vechia Password</th>
                        <th scope="col">Nuova Password</th>
                        <?php if ($user->is_login()) : ?>
                            <th scope="col">#</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                        <?php
                        echo "<tr>";
                        echo '<td>' . "<input type='text' class='form-control text-center' id='oldPassword' name='oldPassword' placeholder='Vechia Password' value=''>" . '</td>';
                        echo '<td>' . "<input type='text' class='form-control text-center' id='newPassword' name='newPassword' placeholder='Nuova Password' value='$newPassword'>" . '</td>';
                        if ($user->is_login()) {
                            echo '<td>'
                                . "<button type='submit' name='save_user' class='btn input-block-level form-control btn-info  text-center'><i class='fas fa-save'></i></button>"
                                . '</td>';
                        }
                        echo "</tr>";
                        ?>
                    </form>
                </tbody>
            </table>
        </div>

        <?php echo  $mesaj_vechia_password;?>      
        <?php echo  $mesaj_nuova_password;?>        
    </div>
</div>

<?php
include "footer.php";
?>