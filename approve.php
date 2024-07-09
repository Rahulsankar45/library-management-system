<?php 
  include "connection.php";
  $id = $_GET["id"];
  mysqli_query($link,"update student_reg set status = 'yes' where id = $id");
?>
<script type = "text/javascript">
    window.location="studentadmin.php";
    </script>