
<html>
<head>
<title>E-Jobs</title>
</head>

<body>
<?php

	$Emri=$_POST['txtName'];
	$Adresa=$_POST['txtAddress'];
	$Qyteti=$_POST['txtCity'];
	$Email=$_POST['txtEmail'];
	$Telefoni=$_POST['txtMobile'];
	$Kualifikimi=$_POST['cmbQual'];
	$Gjinia=$_POST['cmbGender'];	
	$Datelindja=$_POST['txtBirthDate'];
	$path1 = $_FILES["txtFile"]["name"];
	$Status="Pending";
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	$Pyetja=$_POST['cmbQue'];
	$Pergjigjja=$_POST['txtAnswer'];
	$TipiShfrytezuesit="Punekerkues";
	if ($Kualifikimi=="Tjeter")
	{
		$Kualifikimi=$_POST['txtOther'];
	}
	  move_uploaded_file($_FILES["txtFile"]["tmp_name"],"upload/"  .$_FILES["txtFile"]["name"]);
	
	$con = mysql_connect ("localhost","root","123456");
	
	mysql_select_db("puna", $con);
	
	$sql = "insert into punekerkuesit(PunkerkuesEmri,Adresa,Qyteti,Email,Telefoni,Kualifikimi,Gjinia,Datelindja,Permbledhje,Status,UserName,Password,Pyetja,Pergjigjja) values('".$Emri."','".$Adresa."','".$Qyteti."','".$Email."',".$Telefoni.",'".$Kualifikimi."','".$Gjinia."','".$Datelindja."','".$path1."','".$Status."','".$UserName."','".$Password."','".$Pyetja."','".$Pergjigjja."')";
	
	mysql_query ($sql,$con);
	
	mysql_close ($con);
	
	echo '<script type="text/javascript">alert("Regjistrimi me sukses");window.location=\'index.php\';</script>';

?>
</body>
</html>
