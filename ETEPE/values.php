<?php 

if(!empty($_GET['voltage'])&&!empty($_GET['current']))
{
    $v =  $_GET['voltage'];
    $i =  $_GET['current'];
	?>
		<!doctype html>
		<html lang="en">
			<head>
			</head>
			<body>
				<p>Voltage : <? echo $v; ?> Volts</p>
				<p>Current : <? echo $i; ?> Amps</p>
			</body>
		</html>
	<?
}
else{
	?>
		<!doctype html>
		<html lang="en">
			<head>
			</head>
			<body>
				<p>No data received</p>
			</body>
		</html>
		<?
}

?>