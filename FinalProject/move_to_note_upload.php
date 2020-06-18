<?php
$conn = mysqli_connect("localhost","root","","file");
$conn1 = mysqli_connect("localhost","root","","college");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
    include('logindetails.php');
    include('index_staff.php');
    $Name = $row['Name'];
    $sql = "select Subject_name from subjects where Teacher_name = '$Name'";
    $result = $conn -> query($sql);
    if($result-> num_rows > 0){
        while($row = $result->fetch_assoc()){
            $subject = $row["Subject_name"];?>
            <a href="noteupload.php"><?php echo $subject;?></a><?php
            
           
        } 
        
    }
    
    
?>