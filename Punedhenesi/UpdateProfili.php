
<html >
<head>

<title>E-Jobs</title>
</head>

<body>
<?php
$txtId = $_POST['txtId'];
$txtName=$_POST['txtName'];
$txtContact=$_POST['txtContact'];
$txtAddress = $_POST['txtAddress'];
$txtCity=$_POST['txtCity'];
$txtEmail=$_POST['txtEmail'];
$txtMobile = $_POST['txtMobile'];
$txtArea=$_POST['txtArea'];
$txtUser=$_POST['txtUser'];
$txtPassword=$_POST['txtPassword'];
$con = mysql_connect("localhost","root","123456");

mysql_select_db("puna", $con);
$sql = "Update punedhenesit  set KompaniaEmri='".$txtName."',PersoniKontaktues='".$txtContact."',Adresa='".$txtAddress."',Qyteti='".$txtCity."',Email='".$txtEmail."',Telefoni='".$txtMobile."',Pozita='".$txtArea."',UserName='".$txtUser."',Password='".$txtPassword."' where PunedhenesiId=".$txtId."";
mysql_query($sql,$con);
mysql_close($con);
echo '<script type="text/javascript">alert("Profili u ndryshua me sukses");window.location=\'Profili.php\';</script>';
?>
</body>
</html>
