<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<?php require_once('../Connections/puna.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_Recordset1 = "-1";
if (isset($_SESSION['Name'])) {
  $colname_Recordset1 = $_SESSION['Name'];
}
mysql_select_db($database_job, $job);
$query_Recordset1 = sprintf("SELECT PunaId, EmriPunes FROM punet WHERE KompaniaEmri = %s", GetSQLValueString($colname_Recordset1, "text"));
$Recordset1 = mysql_query($query_Recordset1, $job) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_job, $job);
$query_Recordset2 = "SELECT aplikacioni.AplikacionId, aplikacioni.Status, punekerkuesit.PunkerkuesEmri, punekerkuesit.Qyteti, punekerkuesit.Email, aplikacioni.PunaId FROM aplikacioni, punekerkuesit WHERE punekerkuesit.KerkoPunId=aplikacioni.KerkoPunId";
$Recordset2 = mysql_query($query_Recordset2, $job) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);
?>

<html >
<head>
   
<title>JOE-Jobs</title>
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
.style3 {font-weight: bold}
-->
    </style>
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
<?php 
include "Header.php"
?>
<?php 
include "Menyja.php"
?>   
<!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

            <!-- RSS feeds -->
            <hr class="noscreen" />

            <!-- Breadcrumbs -->
            <p id="breadcrumbs">&nbsp;</p>
          <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">

           
            <!-- /article -->

            <hr class="noscreen" />

           
            <!-- /article -->

            <hr class="noscreen" />
            
            <!-- Article -->
           
            <!-- /article -->

            <hr class="noscreen" />

            <!-- Article -->
            <div class="article">
                <h2><span><a href="#">Mire se erdhet</a></span></h2>
               

                <form id="form1" method="post" action="Aplikacion.php">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><strong>Zgjedhni titullin e punes:</strong></td>
                      <td><label>
                        <select name="cmbTitle" id="cmbTitle">
                          <?php
do {  
?>
                          <option value="<?php echo $row_Recordset1['PunaId']?>"><?php echo $row_Recordset1['EmriPunes']?></option>
                          <?php
} while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
  $rows = mysql_num_rows($Recordset1);
  if($rows > 0) {
      mysql_data_seek($Recordset1, 0);
	  $row_Recordset1 = mysql_fetch_assoc($Recordset1);
  }
?>
                        </select>
                      </label></td>
                      <td><label>
                        <input type="submit" name="button" id="button" value="Shiko " />
                      </label></td>
                    </tr>
                  </table>
              </form>
           <?php 
		   if (isset($_POST['cmbTitle']))
		   {
		   $Title=$_POST['cmbTitle'];
		 
		   ?>
                <table width="100%" border="1" bordercolor="#1CB5F1" >
                  <tr>
                    <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Emri</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Qyteti</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Email</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Status</strong></div></th>
                     <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Shiko dhe dergo</strong></div></th>
                  </tr>
                  <?php
$con = mysql_connect ("localhost","root","123456");
	
	mysql_select_db("puna", $con);
$sql = "SELECT aplikacioni.AplikacionId, aplikacioni.Status, 

punekerkuesit.PunkerkuesEmri, punekerkuesit.Qyteti, punekerkuesit.Email, punekerkuesit.KerkoPunId,

aplikacioni.PunaId
FROM aplikacioni, punekerkuesit
WHERE punekerkuesit.KerkoPunId=aplikacioni.KerkoPunId and aplikacioni.PunaId='".$Title."'";
$result = mysql_query($sql,$con);
$stat=1;
while($row = mysql_fetch_array($result))
{
$Id=$row['AplikacionId'];
$Status=$row['Status'];
$JobSeekerName=$row['PunkerkuesEmri'];
$City=$row['Qyteti'];
$Email =$row['Email'];
$JobSeekId=$row['KerkoPunId'];
?>
                  <tr>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JobSeekerName;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $City;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Email;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Status;?></strong></div></td>
                     <td class="style3"><div align="left" class="style9 style5"><strong></strong><a href="ShikoTeDhenat.php?JobSeekId=<?php echo $JobSeekId; ?>&AppId=<?php echo $Id;?>&JobId=<?php echo $Title;?>&Status=<?php echo $Status;?>">Shiko</a></div></td>
                  </tr>
                  <?php
}
$records = mysql_num_rows($result);
?>
                </table>
                <?php
			
mysql_close($con);
	}
?>
              <p>&nbsp;</p>

              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->

<?php
include "Aside.php"
?>

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> 

</body>
</html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
?>
