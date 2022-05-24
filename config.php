<?php
//Do not remove session_start
session_start();

define('SERVERNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DBNAME', 'lotto_90_Italia');

include './database/database.php';
$db   = new Database();

include './model/users.php';
$user = new Users($db);

include './model/ruote.php';
$ruote = new Ruote($db);

include './model/ruote_archivio.php';
$ruote_archivio = new RuoteArchivio($db);

include './model/ruota_selezionata.php';
$ruota_selezionata = new RuotaSelezionata($db);

include './model/ruote_nome_archivio.php';
$ruote_nome_archivio  = new RuoteNomeArchivio($db);

include './model/frequenze.php';
$frequenze = new Frequenze($db);

if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
    $user->login($_SESSION["username"], $_SESSION["password"]);    
}
