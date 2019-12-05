<?php
  include("connect.php");

  $q = "UPDATE todo SET `todo`.`desc`='".$_POST['desc']."',`todo`.`category`='".$_POST['category']."', `todo`.`date`='".$_POST['date']."' WHERE `todo`.`id`=".$_POST['id'];
  $x = mysqli_query($con, $q);

  if($x == 1) {
    header('Location: index.php');
  }
  else {
    /* TODO: Error report */
  }

  mysqli_close($con);
  ?>
