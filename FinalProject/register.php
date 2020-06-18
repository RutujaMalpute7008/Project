
<html>
<link href = "register.css" rel = "stylesheet">
<body>
  <div class = "clg">
  <div class =" clgname">  <br>
    <u>MODERN ENDUCATION SOCIETY'S<br><br>CUSROW WADIA INSTITUTE OF TECHNOLOGY</u>
</div>
    <div class = "logo">
      <img src = cusrow.png class = "mlogo">
    </div>
  
</div>
<div class = "border">
</div>
<div class = "register">
  <div class = "head"><br>
    <u>REGISTER</u>
  </div>
  <br><br><br>
  <section>
  <form method = "post">
    <div class = "name-input">
      <input type = "text" class = "input-box" name = "Name" placeholder = " Full Name" required>
    </div>
    <div class = "roll-no">
      <input type = "text" class = "input-box" name = "roll_no" placeholder = " Enrollment No" required>
    </div>
    <div class = "DOB">
      <input type = "date" class = "input-box" name = "date" placeholder = " Date of Birth" required>
    </div>
    <div class = "menu">
      
      <select name = "year">
        
        <option>First</option>
        <option>Second</option>
        <option>Third</option>
    </select>
    </div>
    <div class = "menu">
    <select name = "department" >
        <option>Computer Department</option>
        <option>Mecahnical Department</option>
        <option>E&TC Department</option>
        <option>Civil Department</option>
        <option>Electrical Department</option>
    </select>
    </div>
    <div class = "address">
      <input type = "text" class = "input-box" name = "address" placeholder = " Address" required>
    </div>
    <div class = "Admission_date">
      <input type = "date" class = "input-box" name = "ad_date" placeholder = "Admission Date" required>
    </div>
    <div class = "sem">
      <input type = "text" class = "input-box" name = "sem" placeholder = "Semester" required>
    </div>
    <div class = "mbno">
      <input type = "text" class = "input-box" name = "mob_no" placeholder = "Mobile-Number" required>
    </div>
    <div class = "username">
      <input type = "text" class = "input-box" name = "username" placeholder = "Username" required>
    </div>
    <div class = "password">
      <input type = "password" class = "input-box" name = "password" placeholder = "Password" required>
    </div>
    <div class = "email">
      <input type = "text" class = "input-box" name = "email" placeholder = "Email-Id" required>
    </div>
    <br>
    
    <center><button class="button button2" name = "register">REGISTER</button></center>
    <?php include('registration_process.php');

    
   ?>

  </form>
</section>
</div>

  </html>
  