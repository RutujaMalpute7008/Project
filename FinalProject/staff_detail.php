<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<style>
body{
    margin : 0px;
    border : 0px;
}
#header{
    width : 100%;
    height : 120px;
    background :#212F3D;
    color :white;
}
#sidebar{
    width : 200px;
    height : 500px;
    background :#212F3D;
    float : left;
    color:white;
    font-size:14px;
}
#data{
    height : 700px;
    background :#E5E7E9 ;
    border-color:black;
}
#adminlogo{
    background : white;
    border-radius : 50px;
    height : 60px;
}
ul li{
    padding :20px;
    border-top : 1px solid grey;
    border-bottom : 1px solid grey;
}
.right-header{
    width:200px;
    height:50%;
    background:#212F3D;

}
.left-header{
    width:100%;
    height:55px;
    background:#2ECC71; 
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 25px;
  cursor: pointer;
  border:2px solid black;
}

.button1{background-color: #212F3D;width :12%; height :11%;} 
.button2{background-color: #212F3D;width :12%; height :11%;}  
.button3{background-color: #212F3D;width :12%;height :11%;}  
.button4{background-color: #212F3D;width :12%; height :11%;} 
.button4{background-color: #212F3D;width :12%; height :11%;}
.button5{background-color: #212F3D;width :12%; height :11%;}
.card{
    background:#B0B0B0;
    height:40px;
}

.container{
    width:110%;
    height:100%;
}
.upper_name{
    width:63%;
    height:60px;
    background:#212F3D;
    float:right;
    padding:30px;
    margin:0px auto;
}

</style>
<body>
<div id = "header"><center></center>
<div class = "upper_name"><p><strong><u>MORDERN EDUCATION SOCIETY'S</u></strong></p>
    </div>
<div class="right-header">

<center><br> <img src = "admin_icon.png" alt = "adminlogo" id = "adminlogo"><br>ADMIN 
<left>
</div>
<div class = "left-header">
    <br>
    <center><u><strong>CUSROW WADIA INSTITTE OF TECHNOLOGY</u></strong></center>
</div>
</div>
<div id = "sidebar">
<ul>
    <li><button ><strong>ADD STAFF</strong></button>
    <li><button ><strong>VIEW STAFF</button></strong></li>
    <li><button ><strong>SEARCH STAFF</button></strong></li>
    <li><button ><strong>REMOVE STAFF</button></strong></li>
    <li><button ><strong>PREVIOUS BATCH STAFF</button></strong></li>
</ul>

</div>

<div id = "data">

<div class = "card">
    <div class = "card-header"><strong><u>WELCOME</u> <u> ADMIN</u></strong></div>
</div>
<br>
<button class="button button1"><u><a href = "comp_staff.php">COMPUTER<br>STAFF</a></u></button>
<button class="button button2"><u><a href = "etc_staff.php">E&TC<br>STAFF</a></u></button>
<button class="button button3"><u><a href = "elect_staff.php">ELECTRICAL<br>STAFF</a></u></button>
<button class="button button4"><u><a href = "mech_staff.php">MECHANICAL<br>STAFF<a></u></button><br>
<button class="button button5"><u>CIVIL<br>STAFF</u></button>





</div>

</body>
</html>
<?php





?>