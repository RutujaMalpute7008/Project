<?php error_reporting(E_ERROR | E_PARSE)?>
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
body{
    margin : 0px;
    border : 0px;
    font-size:15px;
}

#sidebar{
    width : 200px;
    height : 300px;
    background :#212F3D;
    float : left;
    color:white;
    font-size:14px;
}
#data{
    height : 700px;
    background :#E5E7E9 ;
    border-color:black;
}
ul li{
    padding :20px;
    border-top : 1px solid grey;
    border-bottom : 1px solid grey;
}
.right-header{
    width:100%;
    height:45%;
    background:#212F3D;

}
.left-header{
    width:100%;
    height:100px;
    background:#2ECC71; 
    color:black;
    border:1.5px solid black;
}
.uppername{
    height:50%;
    width:100%;
    background:#212F3D;
    text-align:center;
    color:white;
}
.lowername{
    height:50%;
    width:100%;
    background:#27AE60;
    text-align:center;
    color:white;
}


.card{
    background:#B0B0B0;
    height:40px;
}
.upper_name{
    width:63%;
    height:40px;
    background:#212F3D;
    float:right;
    padding:30px;
    margin:0px auto;
}
}
.lower{
    height:2%;
    width:100%;
    float:right;
    background:#212F3D;
}
.inside-sidebar{
    width:100%;
    height:20%;
    border:2px solid black;
    background:#E5E7E9;
    padding:13px;
    color:black;
    text-align:center;
    font-size:18px;
}.button{
    width:85%;
    height:20%;
    border:1px solid #2ECC71;
}

.block{
    width:40%;
    height:1500%;
    background:#99A3A4 ;
    float:center;
    position:absolute;
    left:25%;
    top:200%;
    color:white;
}
.card1{
    background:#B0B0B0;
    height:40px;
    color:black;
    top:2%;
    padding:px;
    margin:8px;
    text-transform:none;
    word-spacing:5px;
    border:1px solid black;
}

.update_button{
   
    border: 1px solid #212F3D;
    width:10%;
    float:right;
    height:60%;
    background:white;
    color:white;
  
}

  


</style>
<body>


<div class = "lower"></div>
<div class = "left-header">
    <div class = "uppername"><u><br>MODERN EDUCATION SOCIETY'S</u></div>
    <div class = "lowername"><u><br>CUSROW WADIA INSTITUTE OF TECHNOLOGY</u></div>
</div>
<div class = "lower"></div>
<div id = "sidebar">
<div class = "inside-sidebar"><strong>UPLOAD</strong></div><br>
<ul>
    <li><button class = "button"><strong><a href = "student_certificate_upload.php">UPLOAD CERTIFICATE</button></a></strong></li>
    <li><button class = "button"><strong><a href = "student_result_upload.php">UPLOAD RESULT</button></a></strong></li>
    
</ul>

</div>

<div id = "data">

<div class = "card">
<div class = "card-header"><strong><u>WELCOME</u>    <u><?php include('logindetails.php');include('index1.php');echo "$Name";?></u></strong></div>   
<br>

<br>
<div class = "block"><div class = "card1">
<div class = "card-header"><strong>NAME       :  <?php include('index1.php');echo "$Name"; ?><button class = "update_button"><a href = "student_name_update.php"><span class = "glyphicon glyphicon-pencil"></button></a></span></div></strong></div>
<div class = "card1">
<div class = "card-header"><strong>EN-NO      :  <?php include('index1.php');echo "$rollno"; ?></div></strong></div>
<div class = "card1">
<div class = "card-header"><strong>DOB        :  <?php include('index1.php');echo "$dob"; ?><button class = "update_button"><a href = "student_dob_update.php"><span class = "glyphicon glyphicon-pencil"></button></a></span></div></strong></div>
<div class = "card1">
<div class = "card-header"><strong>YEAR       :  <?php include('index1.php');echo "$year"; ?><button class = "update_button"><a href = "student_year_update.php"><span class = "glyphicon glyphicon-pencil"></button></a></span></div></strong></div>
<div class = "card1">
<div class = "card-header"><strong>MOBILE-NO  :  <?php include('index1.php');echo "$mob"; ?><button class = "update_button"><a href = "student_mbno_update.php"><span class = "glyphicon glyphicon-pencil"></button></a></span></div></strong></div>
<div class = "card1">
<div class = "card-header"><strong>USERNAME   :  <?php include('index1.php');echo "$username"; ?><button class = "update_button"><a href = "student_username_update.php"><span class = "glyphicon glyphicon-pencil"></button></a></span></div></strong></div>
<div class = "card1">
<div class = "card-header"><strong>PASSWORD   :  <?php include('index1.php');echo "$password"; ?><button class = "update_button"><a href = "student_password_update.php"><span class = "glyphicon glyphicon-pencil"></button></a></span></div></strong></div>
<div class = "card1">
<div class = "card-header"><strong>EMAIL-ID   :  <?php include('index1.php');echo "$email"; ?><button class = "update_button"><a href = "student_email_update.php"><span class = "glyphicon glyphicon-pencil"></button></a></span></div></strong></div>
<div class = "card1">
<div class = "card-header"><strong>DEPARTMENT :  <?php include('index1.php');echo "$department"; ?></div></strong></div>
<div class = "card1">
<div class = "card-header"><strong>SEMESTER   :  <?php include('index1.php');echo "$sem"; ?><button class = "update_button"><a href = "student_sem_update.php"><span class = "glyphicon glyphicon-pencil"></button></a></span></div></strong></div>
<div class = "card1">
<div class = "card-header"><strong>ADMISSION_DATE   :  <?php include('index1.php');echo "$ad_date"; ?></div></strong></div>
</div>




</div>

</body>
</html>
<?php





?>