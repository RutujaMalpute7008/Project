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
.upload_notice{
    width:48%;
    height:100%;
    border:1px solid black;
    float:left;
    margin:10px;
}
.view_notice{
    width:48%;
    height:100%;
    border:1px solid black;
    float:right;
    margin:10px;
}
.heading_upload{
    width:100%;
    height:5%;
    background:#99A3A4;
    text-align:center;
    border:1px solid black;

}
.heading_view{
    width:100%;
    height:5%;
    text-align:center;
    background:#99A3A4;
    border:1px solid black;
}
.upload{
    width:60%;
    height:45%;
    border:1px solid black;
    margin:40px;
    background:#AAB7B8;
}
.input-box{
    display:block;
    width:80%;
    height:35px;
    background:transparent;
    border:1px solid #CCD1D1;
    border-radius:5px;
    margin:5px;
    font-size:15px;
    color:black;
    letter-spacing: 2px;
    padding-left:50px;
    margin-top:20px;
    font-size:16px;
    border:1px solid black;

}
.form{

max-width:10%;
background-color:#222;
opacity:0.8;
margin:5px;
padding:10px;
height:10px;
}
::placeholder{
    color:black;
    font-size:14px;
}
.upload-btn{
    width:25%;
    height:15%;
    background:#34495E ;
    color:white;
}
.result{
    width:60%;
    height:12%;
    text:align:center;
    background:black;
    color:white;
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
.menu select{
    display:block;
    width:80%;
    height:35px;
    background:transparent;
    border:1px solid black;
    border-radius:5px;
    margin:0 auto;
    font-size:15px;
    color:black;
    letter-spacing: 2px;
    padding-left:40px;
    margin-top:30px; 
  }
  .menu select option{
      color:black;
      background-color:rgba(0,0,0,0.5);
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
    <div class = "upload_notice">
        <div class = "heading_upload">UPLOAD NOTICE</div><br>
        <center><div class = "upload">
        <form method = "post" enctype = "multipart/form-data">
                    <div class = "menu">
                        <select name = "notice" >
                            <option>College</option>
                            <option>Computer Dept HOD</option>
                            <option>Mecahnical Dept HOD</option>
                            <option>E&TC Dept HOD</option>
                            <option>Civil Dept HOD</option>
                            <option>Electrical Dept HOD</option>
                            <option>All Dept HOD</option>
                        </select>
                    </div>
            <input type  ="text" name = "subject" class = "input-box" placeholder = "NOTICE SUBJECT">
            <input type  ="File" name = "file" class = "input-box" placeholder = "NOTICE SUBJECT"><br>
            <input type = "submit" name = "upload" class = "upload-btn" value = "UPLOAD">
            
            <?php



$conn = mysqli_connect("localhost","root","","file");

if(isset($_REQUEST['upload'])){
    $notice_for = $_POST['notice'];
    $subject = $_POST['subject'];
    $file = $_FILES["file"]["name"];
    $tmp_name = $_FILES["file"]["tmp_name"];
    $path = "notice/".$file;
    $file1 = explode(".",$file);
    $ext = $file1[1];
    
    
    
    $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
    if(in_array($ext,$allowed)){
        move_uploaded_file($tmp_name,$path);
        $sql = "INSERT into dept_notice(subject,file,Uploaded_date,staff_name,role,department,notice_for) VALUES('$subject','$file','$date','$Name','$role','$department','$notice_for')";
        if(mysqli_query($conn,$sql)){
            ?><div class = "result">
            NOTICE Uploaded</div><?php
        }
        else{
            echo "Error";
        }
    }
    }


?>


        </div><center>
    </div>
    <div class = "view_notice">
    <div class = "heading_view">VIEW UPLOADED NOTICES</div><br>
        
    <?php 
    $sql = "select * from dept_notice where staff_name = '$Name' order by Uploaded_date";
    $result = mysqli_query($conn,$sql);
                if($result -> num_rows > 0){?>
                    
                    <center><table class = "table"></center>
                    <thead class = "thead-grey">
                        <tr>
                            <th>SR.NO</th>
                            <th>FILE</th>
                            <th>UPLOAD_DATE</th>
                            <th>UPLOADED_FOR</th>
                            <th>ACTION</th>
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
                        $uploaded_for = $row['notice_for'];
                        ?> <tr>
                    <td><?php echo "$i."?></td>
                    <td><?php echo $subject?></td>
                    <td><?php echo $upload_date?></td>
                    <td><?php echo $uploaded_for?></td>
                    <td><button ><a href = "notice/<?php echo $row['file']?>">VIEW</a></button></td>
                    <form method = "post">
                    <td><input type = "submit" name = "view_button" value = "DELETE">
                    </td>
                        </tr><?php 
                        if(isset($_POST['view_button'])){
                            continue;
                        
                        }
                        $i++;
                        
      
                      }
                      if(isset($_POST['view_button'])){
                        
                        $query = "DELETE FROM dept_notice WHERE subject = '$subject' and file = '$file' ";
                        
                        $delete = mysqli_query($conn,$query);
                        
                    }
                      
                      echo "</table";
                }
                    else{
                        echo "NO RESULTS FOUND";
                    }
            ?>
       










                </form>


        

    </div>
</div>










