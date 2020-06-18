<?php
include('subject.php');
$row = $query_result-> fetch_assoc();
$subject = $row['Subject_name']; 
$conn = mysqli_connect("localhost","root","","file");
$sql = "select * from note where subject = '$subject'";
$result = mysqli_query($conn,$sql);
error_reporting(E_ERROR | E_PARSE);




?>

<?php
    if(isset($_GET['file'])){
    if(!empty($_GET['file'])){
        $file = $_GET['file'];
        $db = "select * from  note where file=? ";
        $result_db = mysqli_query($conn,$db);
        $filename = basename($_GET['file']);
        $filepath = 'upload/'.$filename;
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


?>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
.main{
    width:100%;
    height:100%;
    background:#BFC9CA;
    border :1px solid black;
    top :0px;
}
.uppername{
    width:100%;
    height:8%;
    background-color:#212F3D ;
    text-align:center;
    border:1px solid black;
    color:white;
}
.lowername{
    width:100%;
    height:8%;
    background-color:#27AE60 ;
    border:1px solid black;
    text-align:center;
    color:white;
}
.heading{
    width:40%;
    float:center;
    height:10%;
    background:#2E4053;
    color:white;
    text-transform:uppercase;
    font-size:18px;
}
.table{
    width:50%;
    border:1px solid black;
    float:center;
    text-transform:uppercase;
    font-size:14px;
}
.thead-grey{
    border:1px solid black; 
    text-align:center;
}
.table td{
    width:20%;
    text-align:center;
}


</style>
<html>
    
        <div class = "uppername"><strong><u>MODERN EDUCATION SOCIETY'S</u></strong> </div></center>
        <div class = "lowername"><strong><u> CUSROW WADIA INSTITUTE OF TECHNOLOGY</u></strong> </div></center>
        <br>
        <center><div class = "heading">NOTES</div><br><br></center>
</html>
            <?php 
                if($result-> num_rows > 0){?>
                    
                    <center><table class = "table"></center>
                    <thead class = "thead-grey">
                        <tr>
                            <th>SR.NO</th>
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
                        $title = $row['fileName'];
                        $upload_date = $row['Uploaded_date'];
                        ?> <tr>
                    <td><?php echo "$i."?></td>
                    <td><?php echo $title?></td>
                    <td><?php echo $upload_date?></td>
                    <td><a href = "notedownload.php?file=<?php echo "$file"?>" class = "btn btn-success">DOWNLOAD</a></td>
                        </tr><?php 
                        $i++;  
                      }
                      echo "</table";
                }
                    else{
                        echo "NO RESULTS FOUND";
                    }
            ?>
       

   
    </html>