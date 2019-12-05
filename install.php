<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>TODO Installer</title>
</head>
<body>
  Beginning installation...<br>
  <?php
    echo "Connecting database.. ";
    include("connect.php");
    echo "Done <br>";
    echo "Creating tables.. ";
    $query1 = "CREATE TABLE IF NOT EXISTS `todo` (`id` int(11) NOT NULL AUTO_INCREMENT, `desc` varchar(200) NOT NULL, `category` varchar(200) NOT NULL, `date` date NOT NULL, `done` int(11) NOT NULL, PRIMARY KEY (`id`))";
    $x = mysqli_query($con, $query1);
    
    if($x==1){
      echo "Done <br>";
    }
    else{
      echo "Error during installation <br>";
    }
    mysqli_close($con);
  ?>
</body>
</html>
