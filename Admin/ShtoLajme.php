

<html >
<head>

<title>E-Jobs</title>
</head>

<body>
<?php

	$Lajmet=$_POST['txtNews'];
	$Data=$_POST['txtDate'];
	$con = mysql_connect("localhost","root","123456");

mysql_select_db("puna", $con);
	$sql = "insert into lajmet	(Lajmet,LajmetData) 	values('".$Lajmet."','".$Data."')";
	mysql_query ($sql,$con);
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Lajmet e reja u shtuan me sukses");window.location=\'Lajmet.php\';</script>';

?>
</body>
</html>
