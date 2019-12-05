<?php
$time_zone = 'Asia/Kolkata';

$con = mysqli_connect("localhost", "root", "", "todoit");

if(!$con) {
    echo "Error connecting to MySQL <br>";
    exit;
}