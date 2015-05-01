
<html >
<head>

<title>Regjistrimi i punedhenesve</title>
</head>

<body>
<?php

	$KompaniaEmri=$_POST['txtName'];
	$PersoniKontaktues=$_POST['txtPerson'];
	$Adresa=$_POST['txtAddress'];
	$Qyteti=$_POST['txtCity'];
	$Email=$_POST['txtEmail'];
	$Telefoni=$_POST['txtMobile'];
	$Pozita=$_POST['txtAreaWork'];
	$Status="Pending";
	$Shfrytezuesi=$_POST['txtUserName'];
	$Fjalekalimi=$_POST['txtPassword'];
	$TipiShfrytezuesit="Punedhenes";
	$Pyetja=$_POST['cmbQue'];
	$Pergjigjja=$_POST['txtAnswer'];

	$con = mysql_connect ("localhost","root","123456");
	
	mysql_select_db("puna", $con);
	
	$sql = "insert into punedhenesit(KompaniaEmri,PersoniKontaktues,Adresa,Qyteti,Email,Telefoni,Pozita,Status,UserName,Password,Pyetja,Pergjigjja) values('".$KompaniaEmri."','".$PersoniKontaktues."','".$Adresa."','".$Qyteti."','".$Email."',".$Telefoni.",'".$Pozita."','".$Status."','".$Shfrytezuesi."','".$Fjalekalimi."','".$Pyetja."','".$Pergjigjja."')";
	
	mysql_query ($sql,$con);
	
	mysql_close ($con);
	
	echo '<script type="text/javascript">alert("Regjistrimi u krye me sukses");window.location=\'index.php\';</script>';

?>
</body>
</html>
