<?php
if (!isset($_SESSION)) 
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

	$txtTitle=$_POST['txtTitle'];
	$txtTotal=$_POST['txtTotal'];
	$cmbQual=$_POST['cmbQual'];
	$txtDesc=$_POST['txtDesc'];
	$Name=$_SESSION['Name'];
	if($cmbQual=="Other")
	{
	$cmbQual=$_POST['txtOther'];
	}
	$con = mysql_connect("localhost","root","123456");

mysql_select_db("puna", $con);
	$sql = "insert into punet (KompaniaEmri,EmriPunes,PozitaELire,MinKualifikimi,Pershkrimi) values('".$Name."','".$txtTitle."','".$txtTotal."','".$cmbQual."','".$txtDesc."')";
	mysql_query ($sql,$con);
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Puna eshte shtuar me sukses ");window.location=\'MenaxhoPun.php\';</script>';

?>
</body>
</html>
