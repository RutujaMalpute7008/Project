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
  margin: 20px;
  cursor: pointer;
  border:2px solid black;
}

.button1 {background-color: #EC7063;} /* Blue */
.button2 {background-color: #A569BD;} /* Red */ 
.button3 {background-color: #5DADE2; } /* Gray */ 
.button4 {background-color: #52BE80;} /* Black */
.button4 {background-color: #F4D03F;}
.card{
    background:#B0B0B0;
    height:40px;
}
.container{
    width:110%;
    height:100%;
}
.dropbtn {
    background-color: #212F3D; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 20px;
  cursor: pointer;
  border:2px solid black;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #B0B0B0}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #393534;
}
.staff{
    background-color: #212F3D; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 20px;
  cursor: pointer;
  border:2px solid black;
}
.staff {
  position: relative;
  display: inline-block;
}
.staff:hover { 
  background-color: #393534;
}
.timetable{
    background-color: #212F3D; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 20px;
  cursor: pointer;
  border:2px solid black;
}
.timetable {
  position: relative;
  display: inline-block;
}
.timetable:hover { 
  background-color: #393534;
}
.timetable-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.timetable-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.timetable-content a:hover {background-color: #B0B0B0}

.timetable:hover .timetable-content {
  display: block;
}

</style>
<body>
<div id = "header"><center></center>
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
    <li><button><strong>PROFILE</button></li></strong>
    <li><button><strong>NOTICES</button></strong></li>
    <li><button><strong>LIBRARY</button></strong></li>
    <li><button><strong>EXAMINATION</button></strong></li>
    <li><button><strong>MANAGE USER</button></strong></li>
</ul>

</div>

<div id = "data">

<div class = "card">
    <div class = "card-header"><strong><u>COMPUTER DEPARTMENT</u></strong></div>
</div>
<br>
<div class="dropdown">
  <button class="dropbtn"><u>STUDENT<br>DETAIL</u></button>
  <div class="dropdown-content">
  <a href="compfirstyr.php">First Year</a>
  <a href="compsecondyr">Second Year</a>
  <a href="compthirdyr">Third Year</a>
  </div>
  </div>
  <button class="staff"><u><a href = "comp_staff.php">STAFF<br>DETAIL</a></u></button>
  <button class="timetable"><u>TIME<br>TABLE</u></button>
  <div class="timetable-content">
  <a href="#">First Year</a>
  <a href="#">Second Year</a>
  <a href="#">Third Year</a>
  </div>





</div>

</body>
</html>
<?php





?>