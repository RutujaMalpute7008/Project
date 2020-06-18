<?php 

if(!isset($_SESSION['username'])){
    $_SESSION['msg'] = "You have to login first";
    header('location:logindemo.php');
}

if(isset($_SESSION['success'])){
    unset($_SESSION['success']);
}
if(isset($_SESSION['username'])){
    

$name = $_SESSION['username'];
$conn = mysqli_connect("localhost","root","","college");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$sql = "select Name from comp_first where Username = '$name'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$Name = $row['Name'];

$sql= "select Enrollment_no from comp_first where Username = '$name'";
$result=mysqli_query($conn,$sql);
$row= mysqli_fetch_array($result);
$rollno = $row['Enrollment_no'];

$sql= "select dob from comp_first where Username = '$name'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$dob = $row['dob'];

$sql= "select year from comp_first where Username = '$name'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$year = $row['year'];

$sql= "select year from comp_first where Username = '$name'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$year = $row['year'];

$sql= "select mobile_no from comp_first where Username = '$name'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$mob = $row['mobile_no'];

$sql= "select username from comp_first where Username = '$name'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$username = $row['username'];

$sql= "select password from comp_first where Username = '$name'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$password = $row['password'];

$sql= "select Email_id from comp_first where Username = '$name'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$email = $row['Email_id'];

$sql= "select Department from comp_first where Username = '$name'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$department = $row['Department'];

$sql= "select Semester from comp_first where Username = '$name'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$sem = $row['Semester'];

$sql= "select Admission_date from comp_first where Username = '$name'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$ad_date= $row['Admission_date'];
}
?>
