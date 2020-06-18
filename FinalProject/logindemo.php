<html>
<link href = "login.css" rel = "stylesheet">
<body>
  <div class = "clg">
  <div class =" name">  <br>
    <strong><u>MODERN ENDUCATION SOCIETY'S<br><br>CUSROW WADIA INSTITUTE OF TECHNOLOGY</u></strong>
</div>
    <div class = "logo">
      <img src = cusrow.png class = "mlogo">
    </div>
  
</div>
<div class = "border">
</div>
  <div class = "register"><u>New user then Register first</u></div>
  <div class = "loginbox">
   <center><h2>LOGIN</h2></center>
      <form method = "post">
        <input type = "text" name = "username" placeholder = "Username"><br>
        <input type = "password" name = "password" placeholder = "Password">
        <input type = "submit" name = "login" value = "Login" >
        <a href = "#">Forget Password</a><br><br>
        <a href = "register.php">REGISTER</a><br><br>
        <?php include('logindetails.php'); ?>
        </form>
    </div>
  </html>
  