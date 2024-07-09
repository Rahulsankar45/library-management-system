<html>
	<body>
        <form method = "post">
            <input type = "text" name = "abc">
            <input type="submit" name = "submit" value = "enter" >
        </form>
        
		<?php
			$con = mysqli_connect("localhost","root","");
	
			mysqli_select_db( $con ,"lms");
            if(isset($_POST["submit"])){

	$result =mysqli_query($con , "SELECT * FROM student_reg where fname= '$_POST[abc]' ");			
			if(!$result)
			{
				echo "There is no records";
			}
			echo "<table border='1'>
			<tr>
			<th>ISBN</th>
			<th>Title</th>
			<th>Authors</th>
			<th>Edition </th>
                  <th>Publisher </th>
 			</tr>";
			while($row = mysqli_fetch_array($result))
			{
				  echo "<tr>";
				  echo "<td>" . $row['fname'] . "</td>";
				  echo "<td>" . $row['lname'] . "</td>";
				  echo "<td>" . $row['email'] . "</td>";
				  echo "<td>" . $row['sem'] . "</td>";
				  echo "</tr>";
			}
			echo "</table>";
        }
			
		?> 
	</body>
</html> 
