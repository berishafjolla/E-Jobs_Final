



<html >
<head>

<title>E-Jobs</title>
</head>

<body>
<?php
$Id = $_GET['EmpId'];
$con = mysql_connect("localhost","root","123456");
// Select Database
mysql_select_db("puna", $con);
$sql = "Update punedhenesit set Status='Confirm' where PunedhenesiId=".$Id."";
mysql_query($sql,$con);
mysql_close($con);
echo '<script type="text/javascript">alert("Kerkesa e punedhenesit eshte konfirmuar");window.location=\'MenaxhoPunedhenes.php\';</script>';
?>
</body>
</html>
