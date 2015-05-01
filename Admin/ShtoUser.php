

<html >
<head>

<title>E-Jobs</title>
</head>

<body>
<?php

	$Shfrytezuesi=$_POST['txtUserName'];
	$Fjalekalimi=$_POST['txtPassword'];
	$con = mysql_connect("localhost","root","123456");

mysql_select_db("puna", $con);
	$sql = "insert into shfrytezuesit	(UserName,Password) values('".$Shfrytezuesi."','".$Fjalekalimi."')";
	mysql_query ($sql,$con);
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Shfrytezuesi u shtua me sukses");window.location=\'User.php\';</script>';

?>
</body>
</html>
