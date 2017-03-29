<?php
	ini_set('mysql.connection_timeout', 300);
	ini_set('default_socket_timmeout', 300);
?>


<!DOCTYPE html>
<html>
<head>
	<title>stage 3</title>
</head>
<body>

<form method="post" enctype="multipart/form-data">
		<fieldset>
			<p>userid</p>	
			<textarea  cols="20" rows="4" name="user" placeholder="userid" required></textarea>
			<br><br>
					

<p>#3
 CLUE: what is your surame?</p>
	
			<textarea  cols="20" rows="4" name="tryans" placeholder="your ans..." required></textarea>
			<br><br>
			<input type="submit" name="ans" value="try_ans">
		
		</fieldset>
</form>

<?php

	ini_set('mysql.connection_timeout', 300);
	ini_set('default_socket_timmeout', 300);
	
	if(isset($_POST['ans'])){
		$answer=$_POST['tryans'];				
		$usern=$_POST['user'];
		$username=mysql_real_escape_string($usern);

		
		
		$con=mysql_connect("localhost","root","");
		mysql_select_db("codeshastra",$con);

		$qry="select * from users";

		
		if (($answer=="shah")) {
			
			echo "you win";
			echo "<br>";

$date = date_create();
echo date_format($date, 'Y-m-d H:i:s');
	
	echo "<br>";
	echo("Thank You");


		}
	}
		
		
		
				

?>

									
									<?php

											ini_set('mysql.connection_timeout', 300);
											ini_set('default_socket_timmeout', 300);

											if(isset($_POST['ans'])){
											
											$usern=$_POST['user'];

											$con=mysql_connect("localhost","root","");
											mysql_select_db("codeshastra",$con);

											$qry="select * from users";

											$result=mysql_query($qry,$con);
									
											while ($row = mysql_fetch_array($result))
											{
																											
													#echo "$row[1]";
													#echo "$row[6]";
												
												
																						

											}
											mysql_close($con);
										}
									?>


</body>
</html>