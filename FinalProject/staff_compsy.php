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

<?php   
    
    if(isset($_POST['submit']))  { 
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
      echo "</table>";?></div><?php
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
    $sql = "select Name,Enrollment_no from comp_first where year = 'second' ";
     $result = $conn -> query($sql);
    if($result-> num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<tr><td>". $row["Enrollment_no"]."</td><td>".$row["Name"]."</td></tr>";
        }
        echo "</table>";

    }
    else{
        echo "No Results Found";
    }?></div><?php
    ?>
</table>
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