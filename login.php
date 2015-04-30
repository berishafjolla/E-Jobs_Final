
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kyqja</title>
</head>

<body>
<?php

session_start();
$Shfrytezuesi=$_POST['txtUser'];
$Fjalekalimi=$_POST['txtPass'];
$TipiShfrytezuesit=$_POST['cmbUser'];
if($TipiShfrytezuesit=="Administrator")
{
$con = mysql_connect("localhost","root","123456");

mysql_select_db("puna", $con);
$sql = "select * from shfrytezuesit where UserName='".$Shfrytezuesi."' and Password='".$Fjalekalimi."'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
            trigger_error("Informacion i gabuar", E_USER_NOTICE);
}
else
{
header("location:Admin/index.php");
} 
mysql_close($con);
}
else if($TipiShfrytezuesit=="Punekerkues")
{
$con = mysql_connect("localhost","root","123456");

mysql_select_db("puna", $con);
$sql = "select * from punekerkuesit where UserName='".$Shfrytezuesi."' and Password='".$Fjalekalimi."' and Status='Confirm'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
trigger_error("Informacion i pasakte",E_USER_WARNING);
}
else
{
$_SESSION['ID']=$row['KerkoPunId'];
$_SESSION['Name']=$row['PunkerkuesEmri'];
header("location:Punekerkuesi/index.php");
} 
mysql_close($con);
}
else
{
$con = mysql_connect("localhost","root","123456");

mysql_select_db("puna", $con);
$sql = "select * from punedhenesit where UserName='".$Shfrytezuesi."' and Password='".$Fjalekalimi."' and Status='Confirm'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
trigger_error("Informacion i gabuar",E_USER_WARNING);
}
else
{
$_SESSION['ID']=$row['PunedhenesiId'];
$_SESSION['Name']=$row['KompaniaEmri'];
header("location:Punedhenesi/index.php");
} 
mysql_close($con);
}
function myErrorHandler($errno, $errstr, $errfile, $errline)
{
    if (!(error_reporting() & $errno)) {
        return;
    }

    switch ($errno) {
    case E_USER_ERROR:
        echo "<b>GABIMI (ERROR) IM</b> [$errno] $errstr<br />\n";
        echo "  Gabim fatal ne rreshtin $errline ne file-n $errfile";
        echo ", PHP " . PHP_VERSION . " (" . PHP_OS . ")<br />\n";
        echo "Deshtim...<br />\n";
        exit(1);
        break;

    case E_USER_WARNING:
        echo "<b>PARALAJMERIM (WARNING) IM</b> [$errno] $errstr<br />\n";
        break;

    case E_USER_NOTICE:
        echo "<b>NJOFTIM (NOTICE) IM</b> [$errno] $errstr<br />\n";
        break;

    default:
        echo "Tip i gabimit i panjoftur: [$errno] $errstr<br />\n";
        break;
    }

    /* Mos ekzekuto PHP internal error handler */
    return true;
}
$old_error_handler = set_error_handler("myErrorHandler");

















?>


</body>
</html>
