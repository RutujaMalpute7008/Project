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
$sql = "select Name from admin where username = '$name'";
$result_staff=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result_staff);
$Name = $row['Name'];


}
?>
