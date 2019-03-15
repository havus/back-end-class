<?php 
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'php123';
$db_name = 'santri';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if ($conn) {
    echo "DB load Success <br>";
} else {
    die(mysqli_error());
}