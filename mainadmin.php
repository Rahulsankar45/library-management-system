<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>
    <link rel="stylesheet" href="mainadmin.css">
</head>
<body>
   <center> <h1 style = "color:rgb(135, 135, 136);">admin block</h1></center><hr>
    <p><div class = "student">
    <center><form action="studentadmin.php" method = "post">
        <h1>student details</h1><br>&nbsp;&nbsp;&nbsp;
       <input type="submit" id = "submit" name = "submit" value = " click it "><br>&nbsp;&nbsp;&nbsp;
    </form></center>
    <div>
    <center>
    <div class = "book">
    <form action="add_books.php" method = "post">
     <h1>book details</h1><br>&nbsp;&nbsp;&nbsp;
      <input type="submit" id = "submit" name = "submit" value = " click it "><br>&nbsp;&nbsp;&nbsp;
    </form></center>
    </div></p>
</body>
</html>