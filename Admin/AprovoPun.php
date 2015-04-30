
<html >
<head>


<title>E-Jobs</title>
</head>

<body>
<?php
$Id = $_GET['JobId'];

$con = mysql_connect ("localhost","root","123456");
	
	mysql_select_db("puna", $con);
$sql = "Update punekerkuesit set Status='Confirm' where KerkoPunId=".$Id."";
mysql_query($sql,$con);
mysql_close($con);
echo '<script type="text/javascript">alert("Kerkesa e punekrkuesit eshte konfirmuar");window.location=\'MenaxhoPun.php\';</script>';
?>
</body>
</html>
