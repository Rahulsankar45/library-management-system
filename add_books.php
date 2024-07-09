<?php
  include "connection.php";


?>
 <link rel="stylesheet" href="reg.css">
<center><h1>add books<h1><hr><br>&nbsp;&nbsp;&nbsp;
<form action = "" method  = "post">
<center><table class = "table">

    <tr>
        <td > <input type = "text" name = "book_name" placeholder = "book_name" required></td>
    </tr>
   
    <tr>
        <td>book image<br> <input type = "file"  name = f1 placeholder = "book_img" required></td>
    </tr>
    <tr>
        <td> <input type = "text"  name = "author_name" placeholder = "author_name" required></td>
    </tr>
    <tr>
        <td> <input type = "text" name = "publication_name" placeholder = "publication_name" required></td>
    </tr>
    <tr>
        <td> <input type = "number" name = "price" placeholder = "price" required></td>
    </tr>
    <tr>
        <td> <input type = "text" name = "books_qty" placeholder = "book_qty" required></td>
    </tr>
    <tr>
        <td> <input type = "text" name = "aval_qty" placeholder = "avalilable_qty" required></td>
    </tr>
    <tr>
        <center><td> <input type = "submit" name = "submit1" value = "insert book"></td><center>
    </tr>
</table><center>
</form><center>

<?php 
    if(isset($_POST["submit1"])){
        mysqli_query($link,"insert into books values('','$_POST[book_name]','$_POST[f1]','$_POST[author_name]','$_POST[publication_name]','$_POST[price]','$_POST[books_qty]','$_POST[aval_qty]')");
        ?>
    <script type = "text/javascript">
        alert("book inserted successfully");
        </script>
    <?php
    }

?>