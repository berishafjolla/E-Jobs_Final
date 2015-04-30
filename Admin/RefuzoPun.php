

<html>
<head>

<title>E-Jobs</title>
</head>

<body>
<?php
$Id = $_POST['txtUserId'];
$Emri=$_POST['txtUserName'];
$Fjalekalimi=$_POST['txtPass'];
$con = mysql_connect("localhost","root","123456");

mysql_select_db("puna", $con);
$sql = "Update shfrytezuesit set UserName='".$Emri."',Password='".$Fjalekalimi."' where UserId=".$Id."";
mysql_query($sql,$con);
mysql_close($con);
echo '<script type="text/javascript">alert("Shfrytezuesi eshte ndryshuar me sukses");window.location=\'User.php\';</script>';
?>
</body>
</html>
