<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','codeshastra');
$con = mysqli_connect(HOST,USER,PASS,DB);
$sql = "select * from users";
$res = mysqli_query($con,$sql);
$result = array();
while($row = mysqli_fetch_array($res)){
array_push($result,array('id'=>$row[1],'time'=>$row[2],'left'=>$row[3],'stage'=>$row[4],'status'=>$row[5]));
}
echo json_encode(array("result"=>$result));
mysqli_close($con);
?>
