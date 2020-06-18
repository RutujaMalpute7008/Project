<?php
include('logindetails.php');
include('index_staff.php');
?>
<html>
<style>
.main{
    width:100%;
    height:100%;
}
.uppername{
    height:10%;
    width:100%;
    background:#212F3D;
    text-align:center;
    color:white;
    border:.5px solid black;
}
.lowername{
    height:10%;
    width:100%;
    background:#27AE60;
    text-align:center;
    color:white;
    border:.5px solid black;
}
.sidebar{
    width : 200px;
    height : 300px;
    background :#212F3D;
    float : left;
    font-size:14px;
    color:white;
}
ul li{
    padding :20px;
    border-top : 1px solid grey;
    border-bottom : 1px solid grey;
}
.heading{
    width:40%;
    height:5%;
    border:1px solid black;
    text-align:center;
    color:black;
    font-size:18px;
}
.date{
  float:right;
}
.time{
    width:8%;
    height:3%;
    text-align:center;
    color:black;
    border:1px solid black;
    float:center;
}
.notice{
    width:100%;
    height:100%;
}

.view_notice{
    width:60%;
    height:100%;
    border:1px solid black;
    float:center;
    margin:10px;
}

.heading_view{
    width:100%;
    height:5%;
    text-align:center;
    background:#99A3A4;
    border:1px solid black;
}

.table{
    width:90%;
    height:20%;
    border:1px solid black;
    float:center;
    text-transform:uppercase;
    font-size:14px;
    margin:30px;
}
.thead-grey{
    border:1px solid black; 
    text-align:center;
    width:50%;
}
.table td{
    text-align:center;
}

.table th{
    border:1px solid black;
    height:20%;
}
.view_button{
    width:50%;
   
    background:#34495E ;
    color:white;
    border:1px solid black;
}
ul li button{
    width:100%;
    height:15%;
}


</style>
<div class = "main">
    <div class = "uppername"><br><strong><u>MODERN EDUCATION SOCIETY'S</u>   
        <div class = "date"><u>
        <?php $date = date("y/m/d"); 
        echo $date;?></div></u>
    </div>
    
    <div class = "lowername"><br><u>CUSROW WADIA INSTITUTE OF TECHNOLOGY</u>
        <div class = "date"><u>
        <?php $time = date("h:i:sa"); 
        echo $time;?></div>
    </div></u></strong>
  
        <br>
    <center><div class = "heading">NOTICE SECTION</div></center><br>
    
    <div class = "notice">
    
        
  
       
            <?php



$conn = mysqli_connect("localhost","root","","file");

?>

        

   <center> <div class = "view_notice">
    <div class = "heading_view">STAFF UPLOADED NOTICES</div><br>
        
    <?php 
    $sql = "select * from dept_notice where role = 'STAFF' and department = '$department'";
    $result = mysqli_query($conn,$sql);
                if($result -> num_rows > 0){?>
                    
                    <center><table class = "table"></center>
                    <thead class = "thead-grey">
                        <tr>
                            <th>SR.NO</th>
                            <th>STAFF-NAME</th>
                            <th>FILE</th>
                            <th>UPLOAD_DATE</th>
                            <th>ACTION</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        
                      $i = 1;  
                      while($row = $result-> fetch_assoc()){
                
                        $file = $row['file'];
                        $subject = $row['subject'];
                        $upload_date = $row['Uploaded_date'];
                        ?> <tr>
                    <td><?php echo "$i."?></td>
                    <td><?php echo $Name?></td>
                    <td><?php echo $subject?></td>
                    <td><?php echo $upload_date?></td>
                    <td><button ><a href = "notice/<?php echo $row['file']?>">VIEW</a></button></td>
                    
                        </tr><?php 
                        $i++;  
                      }
                    

                      echo "</table";
                }
                    else{
                        echo "NO RESULTS FOUND";
                    }
            ?>
       













        

    </div>
</div>










