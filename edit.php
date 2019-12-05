<!DOCTYPE html>
<html>
<head>
  <title>Edit TODO</title>
  <script src="js/addtask.js"></script>
   <script src="jquery/js/jquery.js"></script>
  <script src="jquery/js/jquery-ui.js"></script>
  <script src="js/script.js"></script>
  
  <link rel="stylesheet" href="jquery/css/jquery-ui.css">
</head>
<body>
  <?php
  include("connect.php");

  $q = "SELECT * FROM todo WHERE id=".$_GET['id'];
  $x = mysqli_query($con, $q);
  $row = mysqli_fetch_array($x);

  echo "<div class='container'>";
  echo "<form action='edit_response.php' method='post'>";
  echo "<fieldset>";
  echo "<h3>Edit TODO</h3>";
  echo "<input type='text' name='id' value='".$row['id']."' readonly='readonly' />";
  echo "<input type='text' name='desc' value='".$row['desc']."' />";
  echo '<select name="category" id="action_select">
 
  <option value="work">work</option>
  <option value="dev">dev</option>
  <option value="other">other</option> 
</select>';
  echo "<input  type='text' name='date' value='".$row['date']."' id='datepicker' />";
  echo "<div style='text-align: center;'>";
  echo "<input  type='submit' value='Go'>";
  echo "<div>";
  echo "</fieldset>";
  echo "</form>";
  echo "</div>";

  mysqli_close($con);
  ?>

</body>
</html>