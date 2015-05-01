
<html>
<head>

<title>E-Jobs</title>
</head>

<body>
<?php

	$Id=$_GET['JobId'];
	$con = mysql_connect("localhost","root","123456");

mysql_select_db("puna", $con);
	$sql = "delete from punet where PunaId='".$Id."'";
	mysql_query ($sql,$con);
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Puna eshte fshire me sukses");window.location=\'MenaxhoPun.php\';</script>';

?>
</body>
</html>
