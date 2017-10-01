<?php
session_start();
include("include/db.php");

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  <style type="text/css">
    @charset "utf-8";
@import url(http://weloveiconfonts.com/api/?family=fontawesome);

[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}

body {
  background: #2c3338;
  color: #606468;
  font: 87.5%/1.5em 'Open Sans', sans-serif;
  margin: 0;
}

input {
  border: none;
  font-family: 'Open Sans', Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5em;
  padding: 0;
  -webkit-appearance: none;
}

p {
  line-height: 1.5em;
}

after { clear: both; }

#login {
  margin: 50px auto;
  width: 320px;
}

#login form {
  margin: auto;
  padding: 22px 22px 22px 22px;
  width: 100%;
  border-radius: 5px;
  background: #282e33;
  border-top: 3px solid #434a52;
  border-bottom: 3px solid #434a52;
}

#login form span {
  background-color: #363b41;
  border-radius: 3px 0px 0px 3px;
  border-right: 3px solid #434a52;
  color: #606468;
  display: block;
  float: left;
  line-height: 50px;
  text-align: center;
  width: 50px;
  height: 50px;
}

#login form input[type="text"] {
  background-color: #3b4148;
  border-radius: 0px 3px 3px 0px;
  color: #a9a9a9;
  margin-bottom: 1em;
  padding: 0 16px;
  width: 235px;
  height: 50px;
}

#login form input[type="password"] {
  background-color: #3b4148;
  border-radius: 0px 3px 3px 0px;
  color: #a9a9a9;
  margin-bottom: 1em;
  padding: 0 16px;
  width: 235px;
  height: 50px;
}

#login form input[type="submit"] {
  background: #b5cd60;
  border: 0;
  width: 100%;
  height: 40px;
  border-radius: 3px;
  color: white;
  cursor: pointer;
  transition: background 0.3s ease-in-out;
}
#login form input[type="submit"]:hover {
  background: #16aa56;
}
  </style>
  
  

  
</head>

<body>
  <html lang="en-US">
<head>
  <meta charset="utf-8">
    <title>Login</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">

</head>
    <div id="login">
      <h2 align="center">Admin Login</h2>
      <form method="post"name='form-login'>
        <span class="fontawesome-user"></span>
          <input type="text" name="email" placeholder="Email" required="required">
       
        <span class="fontawesome-lock"></span>
          <input type="password" name="pass" placeholder="Password" required="required">
        
        <input type="submit" name="login" value="Login">

</form>
  
  <h2 align="center" style="color:red; padding-top:50px; padding-bottom:50px;"><?php echo @$_GET['logout']; ?></h2>
</body>
</html>
<?php
if (isset($_POST['login'])) {
  $user_email = $_POST['email'];
  $user_pass = $_POST['pass'];
  $sel_admin = "select * from admin where admin_email='$user_email' AND admin_pass='$user_pass'";
  $run_admin = mysqli_query($con, $sel_admin);
  $check_admin = mysqli_num_rows($run_admin);
  if ($check_admin==1) {
    $_SESSION['admin_email']= $user_email;
    echo "<script>window.open('index.php?loggedin=You successfully logged in','_self')</script>";
  }
  else{
    echo"<script>alert('Email or Password is incorrect! Try again')</script>";
  }
}


?>