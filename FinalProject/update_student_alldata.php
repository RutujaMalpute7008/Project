<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<style>
body{
    margin : 0px;
    border : 0px;
}

#sidebar{
    width : 200px;
    height : 700px;
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
    height:75px;
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
    height:10%;
    border:2px solid black;
    background:#E5E7E9;
    padding:13px;
    color:black;
    text-align:center;
    font-size:18px;
}.button{
    width:85%;
    height:5%;
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
.update{
    width:40%;
    background:#2E4053;
    border:1px solid black;
    padding:0px;
}
.input-box{
    display:block;
    width:62%;
    height:35px;
    background:transparent;
    border:1px solid #CCD1D1;
    border-radius:5px;
    margin:5px;
    font-size:15px;
    color:black;
    letter-spacing: 2px;
    padding-left:50px;
    margin-top:20px;
    font-size:16px;
    border:2px solid white;

}
.form{

max-width:10%;
background-color:#222;
opacity:0.8;
margin:5px;
padding:10px;
height:10px;
}
::placeholder{
    color:black;
}
.button_upload{
    width:20%;
    height:10%;
    background:#B0B0B0;
    border:1px solid black;
}

  


</style>
<body>


<div class = "lower"></div>
<div class = "left-header">
    <div class = "uppername"><u>MODERN EDUCATION SOCIETY'S</u></div>
    <div class = "lowername"><u>CUSROW WADIA INSTITUTE OF TECHNOLOGY</u></div>
</div>
<div class = "lower"></div>
<div id = "sidebar">
<div class = "inside-sidebar"><strong>UPDATE</strong></div><br>
<ul>
    <li><button class = "button"><strong><a href = "student_certificate_upload.php">RECORD</button></a></strong></li>
    <li><button class = "button"><strong><a href = "update_student_alldata.php">YEAR</strong></button></a>
    <li><button class = "button"><strong>SEMESTER</button></strong></li>
    <li><button class = "button"><strong>USERNAME</button></strong></li>
    <li><button class = "button"><strong>PASSWORD</button></strong></li>
    <li><button class = "button"><strong>ADDRESS</button></strong></li>
    <li><button class = "button"><strong>EMAIL-ID</button></strong></li>
    <li><button class = "button"><strong>MOBILE-NO</button></strong></li>
    
</ul>

</div>

<div id = "data">

<div class = "card">
<div class = "card-header"><strong><u>WELCOME</u>    <u><?php include('logindetails.php');include('index1.php');echo "$Name";?></u></strong></div>   
<br>
<center><div class = "update">


<form method = "post">
<input type  ="text" name = "title" class = "input-box" placeholder = "NAME"><input type  ="submit" name = "submit" class = "button_upload" value = "UPDATE">

</form>
</div></center>




</div>

</body>
</html>
<?php





?>