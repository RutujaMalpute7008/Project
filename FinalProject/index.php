<?php
if(isset($_POST['submit'])){
$f="4.jpg";   

$file = ("upload/$f");

$filetype=filetype($file);

$filename=basename($file);

header("Cache-control:public");
header("Content-Description:File Transfer");
header("Content-Disposition:attachment; filename = $filename");
header("Content-Type:application/zip");
header("Content-Transfer-Emcoding:binary");

readfile($file);
}
?>
<html>
<a href = "index.php?file=4.jpg">CLICK HERE</a>
</html>