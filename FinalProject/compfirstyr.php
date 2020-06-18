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
    background:#E5E7E9;
}
#header{
    width : 100%;
    height : 120px;
    background :#212F3D;
    color :white;
}
#sidebar{
    width :17%;
    height : 500px;
    background :#212F3D;
    float : left;
    color:white;
    font-size:14px;
}
#data{
    width:82%;
    float:right;
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



.card{
    background:#B0B0B0;
    height:40px;
}
.search_container{
    width:100%;
    height:10%;
    background:#D6DBDF;
    padding:10px;
    text-align:center;
    font-size:16px;
}.enroll{
    text-align:center;
}.go{
    background-color:#2ECC71;
    border-color:white;
}
.table{
    border-collapse:collapse;
    padding:1px;

}
.table  th{
    text-align:center;
    background:  #2ECC71;
    color:#FFF;
    padding:4px 30px 4px 8px;
    border :2px solid black;
    font-size:18px;
}
table td{
    border : 2px solid black;
    padding:4px 8px;    
    
}
.table tr:nth-child(odd) td {
    background-color:#BDC3C7;
   
}


</style>
<body>
<div id = "header"><center></center>
<div class="right-header">

<center><br> <img src = "admin_icon.png" alt = "adminlogo" id = "adminlogo"><br>ADMIN 
<left>
</div>
<div class = "left-header">
    <br>
    <center><u><strong>CUSROW WADIA INSTITTE OF TECHNOLOGY</u></strong></center>
</div>
</div>
<div id = "sidebar">
<ul>
    <li><button><strong>PROFILE</button></li></strong>
    <li><button><strong><a href = "logindemo.php">LOGIN</a></button></strong></li>
    <li><button><strong>NOTICES</button></strong></li>
    <li><button><strong>LIBRARY</button></strong></li>
    <li><button><strong>EXAMINATION</button></strong></li>
    <li><button><strong>MANAGE USER</button></strong></li>
</ul>

</div>

<div id = "data">

<div class = "card">
    <div class = "card-header"><strong><u>COMPUTER DEPARTMENT</u></strong></div>
</div>
<br>
<div class = "search_container">
<strong><u>SEARCH STUDENT</u></strong>
    <div class = "enroll" >
    <form method = "POST">
     Enrollment Number
    <input type = "text" name = "rollno">
    <input type = "submit" name = "submit" value = "Go" class= "go" height ="5%">
    </form>
    </div>
</div><br><br>


    <?php  
    error_reporting(E_ALL ^ E_WARNING); 
    
    if(isset($_POST['submit']))  {
?>        
  <?php 
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $conn = mysqli_connect("localhost","root","","college");
  $rollno = $_POST['rollno'];
  if($conn->connect_error)
  {
      die("connection failed".$conn->connect_error);
  }
  $sql1 = "select Name,Enrollment_no,dob,address,mobile_no,Email_id from comp_first where Enrollment_no = '$rollno'";
   $result = mysqli_query($conn,$sql1);
   if($result-> num_rows > 0){?>
    <div class = "table">
    <table>
        <tr>
            <th>ENROLLMENT-NO</th>
            <th>NAME</th>
            <th>DOB</th>
            <th>ADDRESS</th>
            <th>MOBLIE-NO</th>
            <th>EMAIL-ID</th>
            
        </tr><?php
      while($row = $result-> fetch_assoc()){
        echo  "<tr><td>". $row["Enrollment_no"]."</td><td>".$row["Name"]."</td><td>".$row["dob"]."</td><td>".$row["address"]."</td><td>".$row['mobile_no']."</td><td>".$row["Email_id"]."</td></tr>";   
      }
      echo "</table";
}
    else{
        echo "NO RESULTS FOUND";
    }
    
    }
    
      
    ?>
    
  <br><br>  
<div class = "table">
<center><table>
    <tr>
        <th>Enrollment No</th>
        <th>Name</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost","root","","college");
    if($conn->connect_error)
    {
        die("connection failed".$conn->connect_error);
    }
    $sql = "select Name,Enrollment_no from comp_first ";
     $result = $conn -> query($sql);
    if($result-> num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<tr><td>". $row["Enrollment_no"]."</td><td>".$row["Name"]."</td></tr>";
        }
        echo "</table";

    }
    else
        echo "No Results Found";
     
    ?>
</table>

</div>

</body>
</html>