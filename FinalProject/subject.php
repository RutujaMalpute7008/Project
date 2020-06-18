<?php 
session_start();
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

$sql = "select Semester from comp_first where Username = '$name'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$sem = $row['Semester'];
$sql = "select Department from comp_first where Username = '$name'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$department = $row['Department'];

$sql = "select department from staff where Username = '$name'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$department_staff = $row['department'];
$query = "select Subject_name from subjects where sem = '$sem' and department = '$department'";
$query_result = mysqli_query($conn,$query);

}

?>