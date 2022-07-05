<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Register Form</title>
</head>
<body>
    <div class="container">
        <div class="register-box">
        <div class="row">
        <div class="col-md-6 login">
                <h2>Register Here</h2>
                <form action="registration.php" method="post">
<div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
</div>
<div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
</div>
<div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
</div>
<div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="cpassword" class="form-control" required>
</div>
<select name="user_type">
         <option value="user">staff</option>
         <option value="admin">admin</option>
      </select><br><br>
<button type="submit" class="btn btn-primary"> Register </button>
<p>Already have an account? <a href="login.php">Login now</a></p>
</form>
</div>
</div>

</div>
</div>
</body>
</html>