<?php

session_start();



$conn = mysqli_connect('localhost','root','');

mysqli_select_db($conn, 'userregistration');

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];
$user_type = $_POST['user_type'];

$s= "select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;

    header('location:home.php');
}else{

    header('location:login.php');
}

?>