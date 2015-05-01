
<html>
<head>
<title>E-Jobs</title>
</head>

<body>
<?php
if(!isset($_SESSION))
{
session_start();
}
	
	$Degree=$_POST['cmbQual'];
	$Uni=$_POST['txtBoard'];
	$Per=$_POST['txtPer'];
	$Id=$_SESSION['ID'];
	if($Degree=="Tjeter")
	{
		$Shkalla=$_POST['txtOther'];
	}
	$con = mysql_connect("localhost","root","123456");
// Select Database
mysql_select_db("puna", $con);
	$sql = "insert into punekerkues_edukimi(KerkoPunId,Shkalla,Universiteti,Perqindja) values('".$Id."','".$Degree."','".$Uni."','".$Per."')";
	mysql_query ($sql,$con);
	mysql_close ($con);
	
	echo '<script type="text/javascript">alert("Profili u krijua me sukses");window.location=\'Edukimi.php\';</script>';

?>
</body>
</html>
