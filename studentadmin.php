<?php
include "connection.php";


?>
<link rel="stylesheet" href = "studentadmin.css">
 <center><h1 style = "color: rgb(135, 135, 136);">student details</h1></center><hr>
<?php
   $res = mysqli_query($link,"select * from student_reg");
   echo "<table  >";
   echo "<tr>";
   echo "<th>"; echo " fname";echo "</th>";
   echo "<th>"; echo " lname";echo "</th>";
   echo "<th>"; echo " address";echo "</th>";
   echo "<th>"; echo " email";echo "</th>";
   echo "<th>"; echo "enn no";echo "</th>";
   echo "<th>"; echo "status";echo "</th>";
   echo "<th>"; echo "sem";echo "</th>";
   echo "<th>"; echo " phone no";echo "</th>";
   echo "<th>"; echo "password";echo "</th>";
   echo "<th>"; echo "approve";echo "</th>";
   echo "<th>"; echo "not approve";echo "</th>";
echo "</tr>";
    while($row = mysqli_fetch_array($res)){
        echo "<tr>";
        echo "<td>"; echo $row["fname"] ;echo "</td>";
        echo "<td>"; echo $row["lname"];echo "</td>";
        echo "<td>"; echo $row["address"];echo "</td>";
        echo "<td>"; echo $row["email"];echo "</td>";
        echo "<td>"; echo $row["enn_no"];echo "</td>";
        echo "<td>"; echo $row["status"];echo "</td>";
        echo "<td>"; echo $row["sem"];echo "</td>";
        echo "<td>"; echo $row["ph_no"];echo "</td>";
        echo "<td>"; echo $row["password"];echo "</td>";
        echo "<td>"; ?> <a href = "approve.php?id=<?php echo $row["id"];?>">approve</a><?php echo "</td>";
        echo "<td>"; ?> <a href = "notapprove.php?id=<?php echo $row["id"];?>"> not approve</a><?php echo "</td>";

     echo "</tr>";
    }
    echo "</table>";
?>