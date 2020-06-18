<?php
//check if form is submitted
if (isset($_POST['submit']))
{
    $filename = $_FILES['file']['name'];

    //upload file
    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
    
        //check if file type is valid
        if(isset($_REQUEST['submit'])){
            $file = $_FILES["file"]["name"];
            $tmp_name = $_FILES["file"]["tmp_name"];
            $path = "upload/".$file;
            $file1 = explode(".",$file);
            $ext = $file1[1];
            $allowed = array("jpg","png","gif","pdf","wmv","doc");
            if(in_array($ext,$allowed)){
                move_uploaded_file($tmp_name,$path);
                $sql = "INSERT into tbl_files(file) VALUES('$file')";
                if(mysqli_query($conn,$sql)){
                    echo "File Successfully Uploaded";
                }
                else{
                    echo "Error";
                }
            }
        }
            
            // insert file details into database
            $sql = "INSERT INTO tbl_files(filename, created) VALUES('$filename', '$created')";
            mysqli_query($con, $sql);
            header("Location: index.php?st=success");
        }
        else
        {
            header("Location: index.php?st=error");
        }
    }
    else
        header("Location: index.php");

?>
