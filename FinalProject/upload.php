<html>
<style>
.clg-name{
    width:100%;
    height:16%;
    background:#2ECC71 ;
    border:1.5px solid black;
    text-align:center;
    color:black;
}

.main{
width:40%;
height:60%;
margin:70px;
padding:20px;
background:#5D6D7E; 
color:rgb(253, 228, 228);
border:4px solid black;
font-size:18px;

box-sizing: border-box;
}
.header{
    width:100%;
    height:13%;
    background:#CCD1D1;
    text-align:center;
    color:black;
    padding:3px;
    border:1px solid black;
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
    margin-top:30px;
    font-size:16px;
    border:2px solid white;

}
.form{

max-width: 100%;
background-color:#222;
opacity:0.8;
}
.button{
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
  border:2px solid white;
  height:50px;
}
.input-placeholder{
    color:black;
}


</style>
<div class= "clg-name"><br><u><strong>MODERN EDUCATION SOCIETY'S<br><br>CUSROW WADIA INSTITUTE OF TECHNOLOGY</u></strong></div>
<div class = "back">
<center><div class = "main">
<div class = "header"><strong>UPLOAD NOTES</strong></div>
<form method = "post" enctype = "multipart/form-data">
FILE NAME
<input type  ="text" name = "title" class = "input-box" placeholder = "File Name ">

<input type  ="File" name = "file" class ="input-box" palceholder ="BROWSE">
<br>
<input type  ="submit" name = "submit" class = "button">


</div></center>
</div>
<?php

$conn = mysqli_connect("localhost","root","","file");
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
    $tname = $_FILES["file"]["tmp_name"];
    
    if(move_uploaded_file($tname,'note/')){
        echo "True";
    }
    else{
        echo "false";
    }
    $sql = "INSERT into upload(title,image) VALUES('$title','$pname')";
    if(mysqli_query($conn,$sql)){
        echo "File Successfully Uploaded";
    }
    else{
        echo "Error";
    }
}




?>
</form>











</html>