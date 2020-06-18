<?php

session_start();
$name = $_SESSION['Name'];
echo "welcome".$name;
?>
