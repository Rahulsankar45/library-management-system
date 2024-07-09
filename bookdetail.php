<?php
include "connection.php";


?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <center><h1 style = "color: rgb(135, 135, 136); backgroundcolor:rgb(179,145,136);">book details</h1></center><hr>
<?php
   $res = mysqli_query($link,"select * from books");
   echo "<table  class='table table-striped'> ";
   echo "<thead>";
   echo "<tr>";
   echo "<th>"; echo " id";echo "</th>";
   echo "<th>"; echo " book_name";echo "</th>";
   echo "<th>"; echo " img_info";echo "</th>";
   echo "<th>"; echo " author_name";echo "</th>";
   echo "<th>"; echo " publication_name";echo "</th>";
   echo "<th>"; echo "price";echo "</th>";
   echo "<th>"; echo "book_qty";echo "</th>";
   echo "<th>"; echo " available_qty";echo "</th>";
echo "</tr>";
echo "</thead>";
    while($row = mysqli_fetch_array($res)){
        echo "<tr>";
        echo "<td>"; echo $row["id"] ;echo "</td>";
        echo "<td>"; echo $row["books_name"];echo "</td>";
        echo "<td>"; echo $row["books_img"];echo "</td>";
        echo "<td>"; echo $row["author_name"];echo "</td>";
        echo "<td>"; echo $row["publication_name"];echo "</td>";
        echo "<td>"; echo $row["price"];echo "</td>";
        echo "<td>"; echo $row["books_qty"];echo "</td>";
        echo "<td>"; echo $row["available_qty"];echo "</td>";
       


     echo "</tr>";
    }
    echo "</table>";
?>