
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
    padding:10px;
    text-transform:uppercase;
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
    background:#85929E;
    height:40px;
    color:black;
    width:50%;
    margin:8px;
    text-transform:uppercase;
    text-align:auto;
    padding:8px;
    letter-spacing:1px;
    border:1.2px solid black;
}
.certifi-date{
    float:right;
    height:100%;
    letter-spacing:none;
   

}
.certifi-date-left{
    float:left;
    height:100%;
    width:15%;

}
.card-header{
    text-transform:uppercase;
    width:35%;
    height:8%;
    background:#AAB7B8;
    border:0.5px solid black;
    
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
    
    <li><button class = "button"><a href = "upload_certificate_view.php"><strong>UPLOADED CERTIFICATES</strong></button></a>
    
    
</ul>

</div>

<div id = "data">

<div class = "card">
<strong><u>WELCOME</u>    <u><?php include('logindetails.php');include('index1.php');echo "$Name";?></u></strong></div>   
<br>
<form method = "post">
<?php
    
    $conn = mysqli_connect("localhost","root","","file");
    $sql = "select * from certificates where Name ='$Name' and department = '$department'";
    $result = mysqli_query($conn,$sql);
    if($result-> num_rows > 0){
        $i = 1;  
        while($row = $result-> fetch_assoc()){
            $fileName = $row['fileName'];
            ?><center><div class = "card1"><div class = "certifi-date-left"></div><u><?php echo "$i."."  ".$fileName; ?></u><u><div class = "certifi-date"><?php echo $row['Uploaded_date']; ?></u></div></div>
                <center><div class = "card-header">
                <button ><a href = "certificate/<?php echo $row['file']?>">VIEW</a></button>
                <a href = ""><input type = "submit" name = "button1" value = "DELETE">  
                </div></center>
                
            <?php    
            $i++;
            
            }
            if(isset($_POST['button1'])){
                $query = "DELETE FROM certificates WHERE Name  = '$Name' and fileName = '$fileName'";
                $delete = mysqli_query($conn,$query);
            }
       
       
    }
    
    
    
  
    
    ?>





</form>
</div>
</html>