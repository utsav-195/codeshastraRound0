<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','codeshastra');
$con = mysqli_connect(HOST,USER,PASS,DB);
$id=$_GET['id'];
$name = $_GET['name'];
$sql = "select `password` from `$name` where `id`='$id'";
$res = mysqli_query($con,$sql) or die("Error");
$row = mysqli_fetch_array($res);
echo $name. " ". $row[0];

mysqli_close($con);
?>
