<?php
session_start();
$username = "";
$password = "";
$_SESSION['success'] = "";
$conn = mysqli_connect("localhost","root","","college");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
if(isset($_POST['login'])){
$username =$_POST['username'];
$password = $_POST['password'];
$admin= "select Username,password from staff where Username = '$username' and password ='$password' and role = 'ADMIN'";
$result_admin =mysqli_query($conn,$admin);
  $row =mysqli_fetch_array($result_admin);
  $count_admin = mysqli_num_rows($result_admin);
  if($count_admin == 1){
    $_SESSION['username'] = "$username";
    $_SESSION['success'] = "You have logged in"; 
    header("location: admin_profile.php");
  }

  if($count_admin == 0){
  
    $staff= "select username,password from staff where username = '$username' and password ='$password'";
    $result_staff =mysqli_query($conn,$staff);
      $row =mysqli_fetch_array($result_staff);
      $count_staff = mysqli_num_rows($result_staff);
      if($count_staff == 1){
        $_SESSION['username'] = "$username";
        $_SESSION['success'] = "You have logged in"; 
        header("location: staff_profile.php");
      }

    } 
  

    if($count_staff == 0){
  $student= "select Username,password from comp_first where username = '$username' and password ='$password'";
  $result_student =mysqli_query($conn,$student);
  $row_student =mysqli_fetch_array($result_student);
  $count_student = mysqli_num_rows($result_student);
  if($count_student == 1){
    $_SESSION['username'] = "$username";
    $_SESSION['department'] = "Computer";
    $_SESSION['success'] = "You have logged in";    
    header("location: studentdemocomp.php");
  }
  if($count_admin == 0 && $count_student == 0){
    ?><html><div class = "error">
  Invalid Username Or Password </div></html><?php
  }

}
}



?>