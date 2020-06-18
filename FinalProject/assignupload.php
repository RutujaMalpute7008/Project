
<html>
<style>

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
.button{
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
.input-placeholder{
    color:black;
}
.result{
 width:60%;
 height:8%;
 background:black;
}
::placeholder {
  color:black;
}
.uppername{
    width:100%;
    height:8%;
    background-color:#212F3D ;
    text-align:center;
    border:1px solid black;
    color:white;
}
.lowername{
    width:100%;
    height:8%;
    background-color:#27AE60 ;
    border:1px solid black;
    text-align:center;
    color:white;
}
.heading{
    width:40%;
    float:center;
    height:8%;
    background:#2E4053;
    color:white;
    text-transform:uppercase;
    font-size:18px;
    
}


</style>
<div class = "uppername"><br><strong><u>MODERN EDUCATION SOCIETY"S</u></strong></div>
<div class = "lowername"><br><strong><u>CUSROW WADIA INSTITUTE OF TECHNOLOGY</u></strong></div><br>
<center><div class = "heading">UPLOAD ASSIGNMENT</div></center>
<center><div class = "main">
<form method = "post" enctype = "multipart/form-data">
<input type  ="text" name = "subject" class = "input-box" placeholder = "Subject Name">

<input type  ="text" name = "title" class = "input-box" placeholder = "File Name ">

<input type  ="File" name = "file" class ="input-box" palceholder ="BROWSE">
<input type  ="date" name = "date" class = "input-box" >

<input type  ="submit" name = "submit" class = "button" value = "UPLOAD">
<?php



$conn = mysqli_connect("localhost","root","","file");

if(isset($_REQUEST['submit'])){
    $subject = $_POST['subject'];
    $title = $_POST['title'];
    $file = $_FILES["file"]["name"];
    $tmp_name = $_FILES["file"]["tmp_name"];
    $path = "upload/".$file;
    $file1 = explode(".",$file);
    $ext = $file1[1];
    $date = $_POST['date'];
    
    $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
    if(in_array($ext,$allowed)){
        move_uploaded_file($tmp_name,$path);
        $sql = "INSERT into assignment(fileName,file,subject,Uploaded_date) VALUES('$title','$file','$subject','$date')";
        
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