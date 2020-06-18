<?php
include('logindetails.php');
include('index_student.php');
?>
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
    width:30%;
    height:5%;
    border:1px solid black;
    text-align:center;
    color:black;
    font-size:18px;
    background:#B2BABB;
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
    height:7%;
    text-align:center;
    background:#B2BABB;
    border:1px solid black;
    text-transform:uppercase;
    letter-spacing:1px;
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
.card{
    letter-spacing:2px;
   
    border:1px solid black;
   
}
.card-header{
    text-transform:uppercase;
    letter-spacing:1px;
    height:10%;
}
.card-body{
    height:10%;
}



</style>
<div class = "main">
    <div class = "uppername"><br><u>MODERN EDUCATION SOCIETY'S</u>   
        <div class = "date"><u>
        <?php $date = date("y/m/d"); 
        echo $date;?></div></u>
    </div>
    
    <div class = "lowername"><br><u>CUSROW WADIA INSTITUTE OF TECHNOLOGY</u>
        <div class = "date"><u>
        <?php $time = date("h:i:sa"); 
        echo $time;?></div>
    </div></u>
  
        <br>
    <center><div class = "heading">NOTICE</div></center><br>
    
    <div class = "notice">
    
        
  
       
 <?php
$conn = mysqli_connect("localhost","root","","file");

?>

        

   <center> <div class = "view_notice">
    <div class = "heading_view"><?php echo "$department"?> notices</div><br>
        
    <?php 
    $sql = "select * from dept_notice where department = '$department'";
    $result = mysqli_query($conn,$sql);
    if(isset($_GET['file'])){
    if(!empty($_GET['file'])){
        $file = $_GET['file'];
        $db = "select * from  dept_notice where file=? ";
        $result_db = mysqli_query($conn,$db);
        $filename = basename($_GET['file']);
        $filepath = 'notice/'.$filename;
        if(!empty($filename) && file_exists($filepath)){
            header("Cache-control:public");
            header("Content-Description:File Transfer");
            header("Content-Disposition:attachment; filename = $filename");
            header("Content-Type:application/zip");
            header("Content-Transfer-Emcoding:binary");
            readfile($filepath);
            exit;
            
        }
        else{
            echo "file not exist";
        }
    }
    }

                if($result -> num_rows > 0){?>
                    
                   
                        <?php
                        
                        
                      $i = 1;  
                      while($row = $result-> fetch_assoc()){
                
                        $file = $row['file'];
                        $subject = $row['subject'];
                        $upload_date = $row['Uploaded_date'];?><br>
                        
                        <div class = "card"><strong><?php  echo "$i. ";echo "$date"; ?></strong>
                        <div class = "card-header"><u>NOTICE BY : <?php echo $row['staff_name']; ?></u></div>
                        <div class = "card-body"> SUBJECT : <?php echo "$subject"; echo "<br>";?>
                        <button ><a href = "notice/<?php echo $row['file']?>" >VIEW</a></button>
                        <button><a href = "demostudent_notice.php?file=<?php echo "$file"?>" >DOWNLOAD</a></button>
                           </div>
                          </div> 
                        <?php
                        $i++;  
                      }
                    }
                     
                    else{
                        echo "NO RESULTS FOUND";
                    }
                

            ?>
       













        

    </div>
</div>










