
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
	$FeedBack=$_POST['txtFeedback'];
	$FDate= date('y/m/d');
	$Id=$_SESSION['ID'];
	
	
	
	$con = mysql_connect("localhost","root","123456");
// Select Database
mysql_select_db("puna", $con);
	$sql = "insert into Feedback(KerkoPunId,Feedback,FeedbakData) values('".$Id."','".$FeedBack."','".$FDate."')";
	mysql_query ($sql,$con);
	mysql_close ($con);
	
	echo '<script type="text/javascript">alert("Vleresimi u krye me sukses");window.location=\'Feedback.php\';</script>';

?>

</body>
</html>
