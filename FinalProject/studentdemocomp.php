<?php error_reporting(E_ERROR | E_PARSE)?>
<html>
<meta charset="utf-8">
    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
@import "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css";

.main{
    width :99%;
    background:#D7DBDD ;
}
.side-bar{
    width:18%;
    height:669px;
    background:black;
    text-align:center;
    color:white;
    border:2px solid white;
}
.name{
    text-transform:uppercase;
}
.small{
    height:2%;
    width:15%;
    background:black;
}
.profile{
    height:30%;
    width:96%;
    background:#D7DBDD;
    margin:3px;
}.middle{
    height:0.5%;
    width:95%;
    background:white;
}.clg-name{
    height:15%;
    width:82%;
    background:#27AE60 ;
    float:right;
    text-align:center;
}
.lower{
    height:0.5%;
    width:82%;
    float:right;
    background:black;
}.social-media{
    position :relative;
    width:18%;
    height:20%;
    background:black;
}
.social-media > div{
     background:#eee;
    text-align:center;
    line-height:40px;
    border-radius:50px;
    color:#fff;
    transition:all 300ms ease-in-out;
}
div.fa-facebook{
    background:#5252b8;
    width:20%;
    height:8%;
    text-align:center;
    line-height:39px;
    border:1.5px solid white;
    
}
div.fa-twitter{
    background:#00acee;
    width:20%;
    height:8%;
    text-align:center;
    line-height:39px;
    border:1.5px solid white;
}
div.fa-google-plus{
    background:#FF5733;  
    width:20%;
    height:8%;
    text-align:center;
    line-height:39px;
    border:1.5px solid white;
}
div.fa-linkedin{
    background:#55acee;
    width:20%;
    height:8%;
    text-align:center;
    line-height:39px;
    border:1.5px solid white;
}
div.fa-facebook:hover{
    color:#5252b8;
    background:#fff;
    border:1px solid #5252b8;
}
div.fa-twitter:hover{
    color:#00acee;
    background:#fff;
    border:1px solid #00acee;
}
div.fa-google-plus:hover{
    color:#FF5733;
    background:#fff;
    border:1px solid #FF5733;
}
div.fa-linkedin:hover{
    color:#55acee;
    background:#fff;
    border:1px solid #55acee;
}
.logged_user_name{
    height:4%;
    width:50%;
    float:right;
    color:white;
    background:black;
}
.right-side{
    width:82%;
    
    float:right;
    background:#D7DBDD;
}
.button1{
  background-color: #4CAF50; 
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
  width:20%;
}

.button{
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  cursor: pointer;
  border:2px solid black;
  width:70%;
  height:8%;
}
.button0 {background-color: #212F3D ;border:2px solid white;}
.button2 {background-color: #212F3D;} 
.button3 {background-color: #212F3D;}
.button4 {background-color: #212F3D;}
.button5 {background-color: #212F3D;}
.subject{
    background-color: #212F3D;
    margin:30px;
    
}
.button6{
    background:#212F3D ;
    color:black;
}
.temp {background-color: #5252b8;
margin:-13px;}
.subject_head{
    width:99%;
    height:6%;
    background-color:#27AE60 ;
    float:right;
    text-align:center;
    border :1px solid black;
    }
    .subjects{
        width:99%;
        height:35%;
        float:right;
        background-color:#AAB7B8;
        border:1px solid black;
        text-transform:uppercase;
    }
    .dropbtn {
background-color: #212F3D; 
border: none;
  color: white;
  padding: 10px 34px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 25px;
  cursor: pointer;
  border:2px solid black;
  height:30%;
  width:90%;
  text-transform:uppercase;
  
}

    .dropdown {
  position: relative;
  display: inline-block;
  text-transform:uppercase;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 150px;
  min-height:40%;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  }

.dropdown-content a {
  color: black;
  padding: 12px 25px;
  text-decoration: none;
  display: block;
  font-size:12px;
  border:1px solid black;
}

.dropdown-content a:hover {background-color: #B0B0B0}

.dropdown:hover .dropdown-content {
  display: block;
}
.clg-name{
    height:15%;
    width:82%;
    background:#27AE60 ;
    float:right;
    text-align:center;
}
.uppername{
    height:50%;
    width:100%;
    float:right;
    background:#212F3D;
    text-align:center;
    color:white;
}
.lowername{
    height:50%;
    width:100%;
    float:right;
    background:#27AE60;
    text-align:center;
    color:white;
}
</style>
<div class = "main">
<div class = "lower"></div>
<div class = "clg-name">
    <div class = "uppername">MORDERN EDUCATION SOCIETY'S</div>
     <div class = "lowername">CUSROW WADIA INSTITUTE OF TECHNOLOGY</div>
 </div> 
<div class = "lower"></div>
<div class = "right-side">


<button class = "button1 button2"><u><a href = "demostudent_notice.php">NOTICES</a></u></button>
<button class="button1 button3"><u>RESULT</u></button>
<button class="button1 button4"><u>DEPARTMENT</u></button>
<button class="button1 button5"><u>EVENTS</u></button><br><br><br><br>
<div class = "subject_head"><u>SUBJECTS</u></div>
<div class = "subjects">
<?php include('subject.php');
if($sem == 1){
if($query_result-> num_rows > 0){
    while($row = $query_result-> fetch_assoc()){
    ?><div class="dropdown">
    <button class="dropbtn"><u><?php echo $row['Subject_name'];?></u></button>
    <div class="dropdown-content">
    <a href="assigndownload.php">ASSIGNMENTS</a>
    <a href="practicaldownload.php">PRACTICALS</a>
    <a href="notedownload.php">NOTES</a>
    <a href="syllabusdownload.php">SYLLABUS</a>
    </div>
    </div>
<?php
        }
    }
}
if($sem == 2){
    if($query_result-> num_rows > 0){
        while($row = $query_result-> fetch_assoc()){
        ?><div class="dropdown">
        <button class="dropbtn"><u><?php echo $row['Subject_name'];?></u></button>
        <div class="dropdown-content">
        <a href="assigndownload.php">ASSIGNMENTS</a>
        <a href="practicaldownload.php">PRACTICALS</a>
        <a href="notedownload.php">NOTES</a>
        <a href="syllabusdownload.php">SYLLABUS</a>
        </div>
        </div>
    <?php
            }
        }
    }
    if($sem == 3){
        if($query_result-> num_rows > 0){
            while($row = $query_result-> fetch_assoc()){
            ?><div class="dropdown">
            <button class="dropbtn"><u><?php echo $row['Subject_name'];?></u></button>
            <div class="dropdown-content">
            <a href="assigndownload.php">ASSIGNMENTS</a>
            <a href="practicaldownload.php">PRACTICALS</a>
            <a href="notedownload.php">NOTES</a>
            <a href="syllabusdownload.php">SYLLABUS</a>
            </div>
            </div>
        <?php
                }
            }
        }
        if($sem == 4){
            if($query_result-> num_rows > 0){
                while($row = $query_result-> fetch_assoc()){
                ?><div class="dropdown">
                <button class="dropbtn"><u><?php echo $row['Subject_name'];?></u></button>
                <div class="dropdown-content">
                <a href="assigndownload.php">ASSIGNMENTS</a>
                <a href="practicaldownload.php">PRACTICALS</a>
                <a href="notedownload.php">NOTES</a>
                <a href="syllabusdownload.php">SYLLABUS</a>
                </div>
                </div>
            <?php
                    }
                }
            }
            if($sem == 5){
                if($query_result-> num_rows > 0){
                    while($row = $query_result-> fetch_assoc()){
                    ?><div class="dropdown">
                    <button class="dropbtn"><u><?php echo $row['Subject_name'];?></u></button>
                    <div class="dropdown-content">
                    <a href="assigndownload.php">ASSIGNMENTS</a>
                    <a href="practicaldownload.php">PRACTICALS</a>
                    <a href="notedownload.php">NOTES</a>
                    <a href="syllabusdownload.php">SYLLABUS</a>
                    </div>
                    </div>
                <?php
                        }
                    }
                }
                if($sem == 6){
                    if($query_result-> num_rows > 0){
                        while($row = $query_result-> fetch_assoc()){
                        ?><div class="dropdown">
                        <button class="dropbtn"><u><?php echo $row['Subject_name'];?></u></button>
                        <div class="dropdown-content">
                        <a href="assigndownload.php">ASSIGNMENTS</a>
                        <a href="practicaldownload.php">PRACTICALS</a>
                        <a href="notedownload.php">NOTES</a>
                        <a href="syllabusdownload.php">SYLLABUS</a>
                        </div>
                        </div>
                    <?php
                            }
                        }
                    }?>
</div>
<br><br>
</div>
<div class = "side-bar">
<div class = "small"></div>
<div class = "profile">
</div><br>
<div class = "name">
<?php  include('logindetails.php');include('index_student.php');echo "$Name";?>
</div>
<div class = "middle">
</div><br>
<div class = "name"><?php include('subject.php');echo "$department";?></div>
<div class = "middle">
</div><br><br>
<div class = "socail-media">

        <div class = "fa fa-facebook"> <br><button class = "temp"></button></a> </div>
        <div class = "fa fa-twitter"><br><button class = "temp"></button></div>
        <div class = "fa fa-google-plus"><br><button class = "temp"></button></div>
        <div class = "fa fa-linkedin"><br><button class = "temp"></button></div>
    </div><br> 
      
<button class="button button0"><u><a href = "update_student_data.php">SETTINGS</u></a></button>
<button class="button button0"><a href = "demofront.php"><u>LOGOUT</u></a></button>

</div>
                </strong>
</html>