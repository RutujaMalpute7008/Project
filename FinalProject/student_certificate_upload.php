<?php error_reporting(E_ERROR | E_PARSE)?>
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
    height : 200px;
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
    height:24%;
    border:2px solid black;
    background:#E5E7E9;
    padding:13px;
    color:black;
    text-align:center;
    font-size:18px;
}.button{
    width:85%;
    height:30%;
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
.card-header{
    text-transform:uppercase;
}
.button1{
  background-color:#212F3D ; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 20px;
  cursor: pointer;
  border:2px solid black;
  width:17%;
}
.main{
width:40%;
height:60%;
margin:70px;
padding:20px;
background:#2E4053; 
color:rgb(253, 228, 228);
border:4px solid black;
font-size:18px;
margin:23px;
box-sizing: border-box;
float:center;
}


.input-box{
    display:block;
    width:62%;
    height:35px;
    background:transparent;
    border:1px solid #CCD1D1;
    border-radius:5px;
    margin:0 auto;
    font-size:15px;
    color:black;
    letter-spacing: 2px;
    padding-left:40px;
    margin-top:20px;
    font-size:16px;
    border:2px solid white;

}
.form{

max-width: 100%;
background-color:#222;
opacity:0.8;
}
.button_upload{
  background-color:#27AE60; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 20px;
  cursor: pointer;
  border:2px solid white;
  height:50px;
}
::placeholder {
  color:black;
}
.result{
 width:60%;
 height:8%;
 background:black;
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
<div class = "inside-sidebar"><strong>VIEW</strong></div><br>
<ul>
    
    <li><button class = "button"><a href = "upload_certificate_view.php"><strong>UPLOADED CERTIFICATES</strong></a></button>
    
    
</ul>

</div>

<div id = "data">

<div class = "card">
<div class = "card-header"><strong><u>WELCOME</u>    <u><?php include('logindetails.php');include('index1.php');echo "$Name";?></u></strong></div>   
<div>
<br><br>
<center>
<div class = "main">
UPLOAD CERTIFICATE
<form method = "post" enctype = "multipart/form-data">


<input type  ="text" name = "title" class = "input-box" placeholder = "File Name ">

<input type  ="File" name = "file" class ="input-box" palceholder ="BROWSE">

<input type  ="submit" name = "submit" class = "button_upload" value = "UPLOAD">

<?php



$conn = mysqli_connect("localhost","root","","file");

if(isset($_REQUEST['submit'])){
    
    $title = $_POST['title'];
    $file = $_FILES["file"]["name"];
    $tmp_name = $_FILES["file"]["tmp_name"];
    $path = "certificate/".$file;
    $file1 = explode(".",$file);
    $ext = $file1[1];
    $date = date("y/m/d");
    
    
    $allowed = [ 'png', 'jpg', 'jpeg'];
    if(in_array($ext,$allowed)){
        move_uploaded_file($tmp_name,$path);
        $sql = "INSERT into certificates(Name,fileName,file,Uploaded_date,department) VALUES('$Name','$title','$file','$date','$department')";
        
        if(mysqli_query($conn,$sql)){
            ?><div class = "result">
            File Successfully Uploaded</div><?php
        }
        else{
            echo "Error";
        }
    }
    }


?>


</div></center>
</div>
</html>