<?php

session_start();

$con = mysqli_connect('localhost', 'root' , '');

mysqli_select_db($con, 'db_register');

$name = $_POST['username'];
$pass = $_POST['password'];

$s = "SELECT * FROM register where Username = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
    header('location:display.php');
}
else{
    header('location:../index.html');
}

?>