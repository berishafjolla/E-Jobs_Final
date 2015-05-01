<html >
<head>

<title>E-Jobs</title>
</head>

<body>
<?php

	$Id=$_GET['NewsId'];
	$con = mysql_connect("localhost","root","123456");
// Select Database
mysql_select_db("puna", $con);
	$sql = "delete from lajmet where LajmetId='".$Id."'";
	mysql_query ($sql,$con);
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Lajmet jane fshire me sukses");window.location=\'Lajmet.php\';</script>';

?>
</body>
</html>
