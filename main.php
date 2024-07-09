<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lms</title>
    <style>
    .student{
    border: 1px solid rgb(69, 67, 67);
    border-radius: 15px;
    margin-top: 80px;
    margin-left: -350px;
    width: 300px;
    height: 200px;
    background-color: rgb(189, 216, 207);
    

     }
     .book{
    border: 1px solid rgb(69, 67, 67);
    border-radius: 15px;
    margin-left:400px;
    margin-top: -160px;
    width: 300px;
    height: 200px;
    margin-bottom: 300px;
    background-color: rgb(189, 216, 207);
    
    }
     .book input{
    width: 100px;
    height: 40px;
    border-radius: 5px;
    font-size: 20px;
    }
     .student input{
    width: 100px;
    height: 40px;
    border-radius: 5px;
    font-size: 20px;
     } 
      body{
          font-family: Verdana, Geneva, Tahoma, sans-serif;
          color: rgb(153, 146, 146);
     } 
    </style>
</head>
<body>
    <center><h1>Library management system</h1><center><hr>
    <p><div class = "student">
        <center><form action="bookdetail.php" method = "post">
            <h1>book details</h1><br>&nbsp;&nbsp;&nbsp;
           <input type="submit" id = "submit" name = "submit" value = " click it "><br>&nbsp;&nbsp;&nbsp;
        </form></center>
        <div>
        <center>
        <div class = "book">
        <form action="#" method = "post">
         <h1>issue book</h1><br>&nbsp;&nbsp;&nbsp;
          <input type="submit" id = "submit" name = "submit" value = " click it "><br>&nbsp;&nbsp;&nbsp;
        </form></center>
        </div></p>
</body>
</html>