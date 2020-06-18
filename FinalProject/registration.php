

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}
.bg-img {
  /* The image used */
  background-image: url("clg.png");

  min-height: 1000px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  
}


/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
div.scrollmenu {
  background-color: #333;
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

div.scrollmenu a:hover {
  background-color: #777;
}
</style>
</head>
<body  bg-color=	#FFFF33>
<div class="bg-img">
  <form method = "post" class="container" >

    <h1>Registration Form</h1>

    <label for="Username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="Contact"><b>Contact no</b></label>
    <input type="text" placeholder="Enter contact no" name="contactno" required>

    <label for="add"><b>Emailid</b></label>
    <input type="text" placeholder="Enter email-id" name="emailid" required>

    <label for="add"><b>Enroll No</b></label>
    <input type="text" placeholder="Enter Enroll.NO" name="enroll" required>
  
    <button type="submit" name = "register" class="btn">Register</button>
    <br>
    <br>
    <?php
    if(isset($_POST['register']))
    {
      include("registration.php");
      if($register == 1)
      {
        echo"username is already taken";
      }
      else
      {
      $reg="insert into project(username,password,contact,email,enroll) values('$user','$pass','contact','$email','$enroll')";
      mysqli_query($conn,$reg);
      echo"<div> <b>Successfully Registered</b></div>";
      }
    }
    ?>
</body>

  </form>
</div>

</html>