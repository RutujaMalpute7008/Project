<html>
<head>
    <meta charset = "utf-8"/>
    <title>Files to Download</title>
    <link href = "css/bootstrap.min.css" rel = "stylesheet">
    </head>
    <body>

        <p><br/></p>
        <div class = "container">
            <table class = "table" table-bordered>
            <thead>
                <tr>
                    
                    <th>File</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
               $conn = mysqli_connect("localhost","root","","file");
               $result = mysqli_query($conn,"select * from finalupload");
               if($result-> num_rows > 0){
                while($row = $result->fetch_assoc()){
            
                ?>
                <tr>
                    
                    <td><?php echo  $row['file']?></td>
                    <td class = "text-center"><a href = "demodownload.php?file=<?php echo $row['file']?>" name = "download" class = "btn btn-primary">Download</a></td>          
                </tr>
                <?php
               }
            }
                ?>
            </tbody>
            
            
            </table>
        </div>

        <script src = "js/jquery.min.js"></script>
        <script src = "js/bootstrap.min.js"></script>

</head>

</html>