<?php
/* Database connexion */
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'phpcrud');

/* Connexion à la base de données */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

/* verifier connection */
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>