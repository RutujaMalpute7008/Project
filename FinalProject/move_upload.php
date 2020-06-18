<?php
    $conn = mysqli_connect("localhost","root","","file");
    $subject = $row["Subject_name"];
    $Name = $row['Name'];
    $sql = "select year,sem from subjects where Subject_name = '$subject'";
    $result = mysqli_query($conn1,$sql);
    $row = $result->fetch_assoc();
    $year = $row['year'];
    $sem = $row['sem'];
    $date  = "SELECT CURRENT_DATE()";
   $query = "INSERT into fupload(year,sem,teacher_name,upload_date) VALUES('$year','$sem','$Name','$date')";
    $query_result = mysqli_query($conn,$query);

}
?>
