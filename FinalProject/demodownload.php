<?php 
$conn = mysqli_connect("localhost","root","","file");
$sql = "select * from finalupload";
$result = mysqli_query($conn,$sql);


?>

<?php
    if(isset($_GET['file'])){
    if(!empty($_GET['file'])){
        $file = $_GET['file'];
        $db = "select * from  finalupload where file=?";
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
    <div class = "container">
        
            <?php 
                if($result-> num_rows > 0){?>
                    <div class = "table">
                    <table>
                        <tr>
                            <th>FILE</th>
                            <th>ACTION</th>
                           
                            
                        </tr><?php
                        
                        
                        
                      while($row = $result-> fetch_assoc()){
                        echo  "<tr><td>". $row["file"]."</td>";
                        $file = $row['file'];
                        ?> <td><a href = "demodownload.php?file=<?php echo "$file"?>">CLICK HERE</a></td></tr><?php   
                      }
                      echo "</table";
                }
                    else{
                        echo "NO RESULTS FOUND";
                    }
            ?>
       

    </div>