

<html>
<head>
<title>E-Jobs</title>
</head>

<body>
<?php

	$Id=$_GET['UserId'];
	$con = mysql_connect("localhost","root","123456");
// Select Database
mysql_select_db("puna", $con);
	$sql = "delete from shfrytezuesit where UserId='".$Id."'";
	mysql_query ($sql,$con);
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Shfrytezuesi eshte fshire me sukses");window.location=\'User.php\';</script>';

?>
</body>
</html>
