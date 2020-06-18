<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script> 
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
<style>
body{
    margin : 0px;
    border : 0px;
}
#header{
    width : 100%;
    height : 120px;
    background :#212F3D;
    color :white;
}
#sidebar{
    width : 200px;
    height : 500px;
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
#adminlogo{
    background : white;
    border-radius : 50px;
    height : 60px;
}
ul li{
    padding :20px;
    border-top : 1px solid grey;
    border-bottom : 1px solid grey;
}
.right-header{
    width:200px;
    height:50%;
    background:#212F3D;

}
.left-header{
    width:100%;
    height:55px;
    background:#2ECC71; 
}

.button1{
  background-color: #212F3D; /* Green */
  border: none;
  color: white;
  padding: 0px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin:0px;
  cursor: pointer;
  border:2px solid black;
  width:50%;
}
.button{
    width:95%;

}

 
.card{
    background:#B0B0B0;
    height:40px;
    padding:10px;
}

 

.container{
    width:110%;
    height:100%;
}
.upper_name{
    width:63%;
    height:60px;
    background:#212F3D;
    float:right;
    padding:30px;
    margin:0px auto;
}
.hod {
    width:18%;
    height:19%;
    float:left;
    margin:5px;
   
}

.first_section{
    width:100%;
    height:30%;
    border:1px solid black;
    text-align:center;
    padding:8px;
    text-transform:uppercase;
    border:1px solid black;
}
.second_section{
    width:100%;
    height:42%;
    border:1px solid black;
    text-align:center;
    padding:10px;
    letter-spacing:0.2px;
    font-size:16px;
    
}
.third_section{
    width:100%;
    height:45%;
    border:1px solid black;
    text-align:center;
    padding:5px;
}

.fourth_section{
    width:100%;
    height:33.5%;
    border:1px solid black;
    text-align:center;
    padding:10px;
}
.outer{
    width:82%;
    height:1%;
}

</style>
<body>
<div id = "header"><center></center>
<div class = "upper_name"><u>MORDERN EDUCATION SOCIETY'S</u>
    </div>
<div class="right-header">

<center><br> <img src = "admin_icon.png" alt = "adminlogo" id = "adminlogo"><br>ADMIN 
<left>
</div>
<div class = "left-header">
    <br>
    <center><u>CUSROW WADIA INSTITTE OF TECHNOLOGY</u></center>
</div>
</div>
<div id = "sidebar">
<ul>
    <li><button class = "button"><strong>ADD STAFF</strong></button>
    <li><button class = "button"><strong>VIEW STAFF</button></strong></li>
    <li><button class = "button"><strong>SEARCH STAFF</button></strong></li>
    <li><button class = "button"><strong>REMOVE STAFF</button></strong></li>
    <li><button class = "button"><strong>PREVIOUS BATCH STAFF</button></strong></li>
</ul>

</div>

<div id = "data">

<div class = "card">
    <div class = "card-header1"><strong><u>MECHANICAL</u> <u>STAFF</u></strong></div>
</div><br>
<?php
     $conn = mysqli_connect("localhost","root","","college");
     if($conn->connect_error)
     {
         die("connection failed".$conn->connect_error);
     }
     $i = "1";
     $sql = "select Name,qualification,role from staff where department = 'Mechanical Department' and role = 'HOD'";
     $result = $conn -> query($sql);
     $row = $result-> fetch_assoc();
     $Name = $row["Name"];
     $Role = $row["role"];
     $qualification = $row["qualification"];
    
        ?>
            
            <div class = "hod">
                <div class = "first_section"> <strong><?php echo "$Role" ?></strong></div>
                <div class = "second_section">Name : <?php echo "$Name" ?></div>
                <div class = "third_section">Qualification :<?php echo "$qualification" ?></div>
                <div class = "fourth_section"><button class = "button1">DETAIL</button></div>
            </div>
            <?php
            $sql1 = "select Name,qualification,role from staff where department = 'Mechanical Department' and role != 'HOD'";
            $result1 = $conn -> query($sql1);
            while($row = $result1-> fetch_assoc()){
               $Name = $row["Name"];
               $Role = $row["role"];
               $qualification = $row["qualification"];
               ?>
               <div class = "hod">
                <div class = "first_section"> <strong><?php echo "$Role" ?></strong></div>
                <div class = "second_section">Name : <?php echo "$Name" ?></div>
                <div class = "third_section">Qualification :<?php echo "$qualification" ?></div>
                <div class = "fourth_section"><button class = "button1">DETAIL</button></div>
            </div>
            <?php
            if($i == "4"){
                ?><br><?php
            }
            $i++;
            }
?>

</div>

</body>
</html>
<?php





?>