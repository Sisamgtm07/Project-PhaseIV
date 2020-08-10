<?php

session_start();
header('location:createprofile.php');
$con = mysqli_connect('localhost', 'root' , '');

mysqli_select_db($con, 'db_register');

$name = $_POST['username'];
$pass = $_POST['password'];

$s = "SELECT * FROM register where Username = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"Username ALready Taken";
}
else{
    $reg = "INSERT into register(Username, Password) 
            VALUES ('$name', '$pass')";

    mysqli_query($con, $reg);
    echo"Registration successful";
}

?>