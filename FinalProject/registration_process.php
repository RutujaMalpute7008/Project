<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL ^ E_WARNING);
$conn = mysqli_connect("localhost","root","","college");
$set = "";
if(isset($_POST['register']))
{        
    $name = $_POST['Name'];
    if(preg_match("/^([a-zA-Z' ]+)$/","$name")){
            $set = "1";
    }
    else{
        echo "Invalid Name";
        echo "<br>";
    }
    $roll_no = $_POST['roll_no'];
    
        $check_roll = "select Enrollment_no from comp_first where Enrollment_no = $roll_no";
        $fire_roll = mysqli_query($conn,$check_roll);
        $row_roll =mysqli_fetch_array($fire_roll);
        $count_roll = mysqli_num_rows($fire_roll);
          if($count_roll == 1){
          echo "Enrollment Number is Already Existing";
          echo "<br>";
          }
          else{
            $set = "2";
             }
    
    
    $date = $_POST['date'];
    
     
    $address = $_POST['address'];
    $department = $_POST['department'];
    $year = $_POST['year']; 
    $mob_no = $_POST['mob_no'];
    
        $check_mobno = "select Mobile_no from comp_first where Mobile_no = $mob_no";
        $fire_mobno = mysqli_query($conn,$check_mobno);
        $row_mobno =mysqli_fetch_array($fire_mobno);
        $count_mobno = mysqli_num_rows($fire_mobno);
          if($count_mobno == 1){
          echo "Mobile Number Existing";
          echo "<br>";
          }
          else{
            $set = "3";
      }

    $username = $_POST['username'];
    $check_username = "select Username from comp_first where Username = $username";
        $fire_username = mysqli_query($conn,$check_username);
        $row_username =mysqli_fetch_array($fire_username);
        $countusername = mysqli_num_rows($fire_username);
          if($countusername == 1){
          echo "Username Already taken";
          echo "<br>";
          }
          else{
            $set = "4";
          }  
      
  
    $password = $_POST['password'];
    $check_password = "select password from comp_first where password  = $password ";
        $fire_password = mysqli_query($conn,$check_password);
        $row_password =mysqli_fetch_array($fire_password);
        $count_password = mysqli_num_rows($fire_password);
          if($count_password == 1){
          echo "Password Already taken";
          echo "<br>";
          }
          else{
            $set = "5";
          }  
      
   
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        $check_email = "select email from comp_first where email = $email";
        $fire_email= mysqli_query($conn,$check_email);
        $row_email =mysqli_fetch_array($fire_email);
        $count_email = mysqli_num_rows($fire_email);
          if($count_email == 1){
          echo "Email Alredy Existing";
          echo "<br>";
          }
        else{
          $set= "6";
        } 
      }
    else{
        echo "Invalid Email Id";
        echo "<br>";
    }
    $Admission_date = $_POST['ad_date'];
    $sem = $_POST['sem'];
    if(preg_match("/^[0-6]$/","$sem")){
      $set = "7";
      }
    else{
        echo "Invalid Semester";
    }
  
    if($set == 7){
    store_database($name,$roll_no,$date,$year,$address,$mob_no,$username,$password,$email,$department,$Admission_date,$sem);
    }
  }   
function store_database($name,$roll_no,$date,$year,$address,$mob_no,$username,$password,$email,$department,$Admission_date,$sem){
    $conn = mysqli_connect("localhost","root","","college");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}

if($department == "Computer Department"){

    $sql = "Insert into comp_first(Name,Enrollment_no,dob,year,address,mobile_no,username,password,Email_id,Department,Admission_date,Semester)
    Values('$name','$roll_no','$date','$year','$address','$mob_no','$username','$password','$email','$department','$Admission_date','$sem')";
    if ($conn->query($sql) === TRUE) {
        
        $count = 1;
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}
if($department == "Mechanical Department"){

  $sql = "Insert into mechanical(Name,Enrollment_no,dob,year,address,mobile_no,username,password,Email_id,Department,Admission_date,Semester)
  Values('$name','$roll_no','$date','$year','$address','$mob_no','$username','$password','$email','$department','$Admission_date','$sem')";
  if ($conn->query($sql) === TRUE) {
      
      $count = 1;
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

}
}
?>