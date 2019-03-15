<?php

// echo "Success";

// $input = $_POST;

// session_start();
// if ($input['nama'] == "admin" && $input['password'] == "qodr123") {
//     $_SESSION['username'] = $input['nama'];
//     header('location: home.php');
// } else {
//     $_SESSION['error'] = "<div class=\"error\"><p>Error Login</p></div>";
//     header('location: main.php');
// }

require('db.php');
$data = [
    ':nama' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_ENCODED),
    ':password' => password_hash($_POST['password'],PASSWORD_DEFAULT)
];
$nama = $data[":nama"];
$pw = $data[":password"];

$query = "INSERT INTO user (nama, password) VALUES ('$nama', '$pw')";

$insert = mysqli_query($conn, $query);

if (!$insert) {
    die(mysqli_error());
} else {
    echo 'Register Succesfully';
}


// print_r($data);



?>