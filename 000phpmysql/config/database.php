
<?php

$server   = "localhost";
$username = "root";
$password = "";
$database = "noe";


$mysqli = new mysqli($server, $username, $password, $database);


if ($mysqli->connect_error) {
    die('error'.$mysqli->connect_error);
}
?>