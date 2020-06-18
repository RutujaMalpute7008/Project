<?php error_reporting(E_ERROR | E_PARSE);
include('subject.php');?>
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href = "profile.css" rel = "stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

   
    
<div class = "main">
<div class = "lower"></div>
<div class = "clg-name">
    <div class = "uppername">MORDERN EDUCATION SOCIETY'S</div>
     <div class = "lowername">CUSROW WADIA INSTITUTE OF TECHNOLOGY</div>
 </div>    
<div class = "lower"></div>
<div class = "right-side">
<div class = "card">
    <div class = "card-header"><strong><u>COMPUTER DEPARTMENT STUDENT</u></strong></div>
</div><br>
<div class = "border"></div>
<div class = "search_container">
<strong><u>SEARCH STUDENT</u></strong>
    <div class = "enroll" >
    <form method = "POST">
     Enrollment Number
    <input type = "text" name = "rollno">
    <input type = "submit" name = "submit" value = "Go" class= "go" height ="5%">
    </form>
    </div>
</div><br>
<div class = "border"></div>

    
</div>
<div class = "side-bar">
<div class = "small"></div>
<div class = "profile">
</div><br>
<div class = "name">
<?php  include('logindetails.php');include('index_staff.php');echo "$Name";?>
</div>
<div class = "middle">
</div><br>
<div class = "name"><?php  echo"$department_staff";?></div>
<div class = "middle">
</div><br><br>
<div class = "socail-media">

        <div class = "fa fa-facebook"> <br><button class = "temp"></button></a> </div>
        <div class = "fa fa-twitter"><br><button class = "temp"></button></div>
        <div class = "fa fa-google-plus"><br><button class = "temp"></button></div>
        <div class = "fa fa-linkedin"><br><button class = "temp"></button></div>
    </div><br> 
      
<button class="button"><u><a href = "update_student_data.php">SETTINGS</u></a></button>
<button class="button"><u><a href = "update_student_data.php">LOGOUT</u></a></button>
</div>

</html>