<?php 
  include "connection.php";  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="reg.css">
</head>
<center><h1>Registeration form</h1></center>
<hr>

<body>
    <form method = "post">
    <div class="back">
    <h1>student detais</h1>
    <h2>FName : <input type="text" name="fname" id="fname" placeholder="eg rahul" required></h2>
    <h2>lName : <input type="text" name="lname" id="lname" placeholder="eg sankar" required></h2>
     <h2> Address: <textarea name ="address"  id="address" rows="3" cols="90" placeholder="tell something about you"></textarea></h2>
     <h2>Email id:<input type="text"  name="email" id="email" placeholder="abcd@gmail.com" required></h2>
     <h2>enn no: <input type="number"  name="enn_no" id="enn_no" placeholder="654003" required></h2>
     <h2>sem: <input type="number" id="sem" name="sem"  placeholder="" required></h2>
     <h2>phone no<input type="number" id="ph_no" name="ph_no" required></h2>
     <h2>password: <input type="password" id="password" name="password" placeholder="" required></h2>
    <div class = "submit">
   <center> <input type="submit" name = "submit" value = "registeration" ></center>
   </div>
</div>
</form>
<?php 
   if(isset($_POST["submit"]))
   {
    $link =  mysqli_connect("localhost","root","");
    mysqli_select_db($link,"lms");
    mysqli_query($link,"insert into student_reg values('','$_POST[fname]','$_POST[lname]','$_POST[address]','$_POST[email]','$_POST[enn_no]', 'no','$_POST[sem]','$_POST[ph_no]','$_POST[password]' )");
  
   
   }
   ?>
</body>
</html>