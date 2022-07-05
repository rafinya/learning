<?php

session_start();
header('location:login.php');


$conn = mysqli_connect('localhost','root','');

mysqli_select_db($conn, 'userregistration');

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];
$user_type = $_POST['user_type'];

$s= "select * from usertable where name = '$name'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Username Already Taken";
}else{

    if($pass != $cpass){
       $error[] = 'password not matched!';
    }else {
    $reg = "insert into usertable(name , email , password, user_type) values ('$name' , '$email' , '$pass' , '$user_type')";
    mysqli_query($conn, $reg );
    echo "Registration Successful";
    }
}


?>