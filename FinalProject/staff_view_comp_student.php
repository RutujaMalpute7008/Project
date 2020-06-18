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
    <button class = "button1" ><a href = "staff_compfy.php">FIRST YEAR</a></button>
    <button class = "button1"><a href = "staff_compsy.php">SECOND YEAR</a></button>
    <button class = "button1"><a href = "staff_compty.php">THIRD YEAR</a></button><br>

    
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
<div class = "name"><?php  
                    if($role = 'ADMIN'){
                        echo "ADMIN";
                    }
                    else{
                        echo"$department_staff";
                    }


?></div>
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