<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','codeshastra');
$con = mysqli_connect(HOST,USER,PASS,DB);
$link=$_GET['link'];
$id = $_GET['id'];
$sql = "update users set link = '$link' where id = '$id'";
$res = mysqli_query($con,$sql) or die("Error");
mysqli_close($con);
?>