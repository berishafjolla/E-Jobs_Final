<?php
if(!isset($_SESSION))
{
session_start();
}
?>

<html >
<head>

<title>E-Jobs</title>
</head>

<body>
<?php

	$PunaId=$_GET['JobId'];
	$KerkoPunId=$_SESSION['ID'];
	$Status="Apply";
	$Pershkrimi="Nuk ka mesazh";
	
	
	$con1 = mysql_connect ("localhost","root","123456");
	
	mysql_select_db("puna", $con1);
	
	$sql1 = "select * from aplikacioni where KerkoPunId='".$KerkoPunId."' and PunaId='".$PunaId."'";
	
	$result1 = mysql_query ($sql1,$con1);
	$records1 = mysql_num_rows($result1);
	
	mysql_close ($con1);
	if($records1==0)
	{
	
	
	$con = mysql_connect("localhost","root","123456");
// Select Database
mysql_select_db("puna", $con);
	
	$sql = "insert into aplikacioni (KerkoPunId,PunaId,Status,Pershkrimi) values('".$KerkoPunId."','".$PunaId."','".$Status."','".$Pershkrimi."')";

	mysql_query ($sql,$con);
	
	mysql_close ($con);
	
	echo '<script type="text/javascript">alert("Keni aplikuar me sukses");window.location=\'KerkoPun.php\';</script>';
}
else
{
echo '<script type="text/javascript">alert("Ju keni aplikuar per pune tashme");window.location=\'KerkoPun.php\';</script>';
}
?>
</body>
</html>
