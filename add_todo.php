<?php
  include("connect.php");

  $q = "INSERT INTO todo (`todo`.`desc`, `todo`.`category`, `todo`.`date`, `todo`.`done`) VALUES('".$_POST['desc']."','".$_POST['category']."', '".$_POST['date']."', 0)";
  $x = mysqli_query($con, $q);

  if($x == 1) {
    header('Location: index.php');
  }
  else {
    /* TODO: Error report */
  }

  mysqli_close($con);
  ?>
