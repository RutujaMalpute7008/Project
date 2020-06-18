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
.heading{
    width:40%;
    height:5%;
    border:1px solid black;
    text-align:center;
    color:black;
    font-size:18px;
}
.notice_display{
    width:80%;
    height:100%;
    border:1px solid black;
    left:20%;
}
.button{
    background-color:#212F3D ; 
    border: none;
    color: white;
    padding: 15px 35px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 8px;
    cursor: pointer;
    border:2px solid black;
    width:21%;
    height:11%;
}
.border{
    width:100%;
    height:0.2%;
    background:black;
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
button{
    width:100%;
    height:12%;
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
    <div class = "sidebar">
    <ul>
    <?php 
    include('logindetails.php');
    include('index_staff.php');
    if($role == 'HOD'){
    ?>
    <li><button><strong><a href = "view_admin_notice.php">ADMIN NOTICE</a></button></li></strong>
    <li><button><strong ><a href = "view_staff_notice.php">STAFF NOTICE </a></button></strong></li>
    <li><button><strong><a href = "">ALL NOTICE</a></button></strong></li>
<?php } 
    if($role == 'STAFF'){
        ?>
        <li><button><strong><a href = "view_admin_staff.php">ADMIN NOTICE</a></button></li></strong>
        <li><button><strong ><a href = "view_hod_notice.php">HOD NOTICE </a></button></strong></li>
        
    <?php } ?>
</ul>
</div>
    
        
       



    </div></center>
</div>




</html>
