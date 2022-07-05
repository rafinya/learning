<?php


session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet"  href="style.css">
    <title> Home Page </title>
</head>   
<body> 

    <div class="container">
    <a class="float-right" href="logout.php"> LOGOUT </a>
  

   <h1> WELCOME <?php echo $_SESSION['username'];?></h1>

</div>
</body>
</html>