
<html>
<head>

<title>E-Jobs</title>
</head>

<body>
<?php
$Id = $_GET['Id'];
$Email = $_GET['Email'];
$con = mysql_connect("localhost","root","123456");

mysql_select_db("puna", $con);
$sql = "Update aplikacioni set Status='Ftesa eshte derguar' where AplikacionId=".$Id."";
mysql_query($sql,$con);
mysql_close($con);
echo '<script type="text/javascript">alert("U ndryshua me sukses");window.location=\'Aplikacion.php\';</script>';
?>
</body>
</html>
