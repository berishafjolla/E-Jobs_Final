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

$currentPage = $_SERVER["PHP_SELF"];

mysql_select_db($database_job, $job);
$query_Recordset1 = "SELECT distinct MinKualifikimi FROM punet";
$Recordset1 = mysql_query($query_Recordset1, $job) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_job, $job);
$query_Recordset3 = "SELECT punet.PunaId, punet.KompaniaEmri, punet.EmriPunes, aplikacioni.Status, aplikacioni.KerkoPunId, aplikacioni.Pershkrimi FROM aplikacioni, punet WHERE aplikacioni.PunaId=punet.PunaId";
$Recordset3 = mysql_query($query_Recordset3, $job) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);
$totalRows_Recordset3 = mysql_num_rows($Recordset3);

mysql_select_db($database_job, $job);
$query_Recordset4 = "SELECT distinct KompaniaEmri FROM punet";
$Recordset4 = mysql_query($query_Recordset4, $job) or die(mysql_error());
$row_Recordset4 = mysql_fetch_assoc($Recordset4);
$totalRows_Recordset4 = mysql_num_rows($Recordset4);

mysql_select_db($database_job, $job);
$query_Recordset5 = "SELECT distinct EmriPunes FROM punet";
$Recordset5 = mysql_query($query_Recordset5, $job) or die(mysql_error());
$row_Recordset5 = mysql_fetch_assoc($Recordset5);
$totalRows_Recordset5 = mysql_num_rows($Recordset5);

mysql_select_db($database_job, $job);
$query_Recordset6 = "SELECT distinct markersk.name FROM markersk ,markers WHERE markersk.name=markers.name";
$Recordset6 = mysql_query($query_Recordset6, $job) or die(mysql_error());
$row_Recordset6 = mysql_fetch_assoc($Recordset6);
$totalRows_Recordset6 = mysql_num_rows($Recordset6);

$colname_Recordset2 = "-1";
if (isset($_POST['cmbQual'])) {
  $colname_Recordset2 = $_POST['cmbQual'];
}
$colname2_Recordset2 = "-1";
if (isset($_POST['cmbCompany'])) {
  $colname2_Recordset2 = $_POST['cmbCompany'];
}
$colname3_Recordset2 = "-1";
if (isset($_POST['cmbArea'])) {
  $colname3_Recordset2 = $_POST['cmbArea'];
}
$colname4_Recordset2 = "-1";
if (isset($_POST['cmblokacioni'])) {
  $colname4_Recordset2 = $_POST['cmblokacioni'];
}

mysql_select_db($database_job, $job);
$query_Recordset2 = sprintf("SELECT * FROM punet WHERE MinKualifikimi = %s and KompaniaEmri=%s and EmriPunes=%s", GetSQLValueString($colname_Recordset2, "text"),GetSQLValueString($colname2_Recordset2, "text"),GetSQLValueString($colname3_Recordset2, "text"));
$Recordset2 = mysql_query($query_Recordset2, $job) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);

$queryString_Recordset2 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset2") == false && 
        stristr($param, "totalRows_Recordset2") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset2 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset2 = sprintf("&totalRows_Recordset2=%d%s", $totalRows_Recordset2, $queryString_Recordset2);
?>

<html>
<head>
 
<title>E-Jobs</title>
   
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
.style2 {font-weight: bold}
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
                <h2><span><a href="#">Kerko Pune</a></span></h2>
               

                <form id="form1" method="post" action="KerkoPun.php">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><strong>Zgjedhni kualifikimin:</strong></td>
                      <td><label>
                      <select name="cmbQual" id="cmbQual">
                        <?php
do {  
?>
                        <option value="<?php echo $row_Recordset1['MinKualifikimi']?>"><?php echo $row_Recordset1['MinKualifikimi']?></option>
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
                      <td><label></label></td>
                    </tr>
                    <tr>
                      <td><strong>Zgjedhni emrin e kompanise:</strong></td>
                      <td><label>
                        <select name="cmbCompany" id="cmbCompany">
                          <?php
do {  
?>
                          <option value="<?php echo $row_Recordset4['KompaniaEmri']?>"><?php echo $row_Recordset4['KompaniaEmri']?></option>
                          <?php
} while ($row_Recordset4 = mysql_fetch_assoc($Recordset4));
  $rows = mysql_num_rows($Recordset4);
  if($rows > 0) {
      mysql_data_seek($Recordset4, 0);
	  $row_Recordset4 = mysql_fetch_assoc($Recordset4);
  }
?>
                        </select>
                      </label></td>
                      <td>&nbsp;</td>
                    </tr>
                   <tr>
                      <td><strong>Zgjedhni poziten e punes:</strong></td>
                      <td><label>
                        <select name="cmbArea" id="cmbArea">
                       
                        
                          <?php
do {  
?>
                          <option value="<?php echo $row_Recordset5['EmriPunes']?>"><?php echo $row_Recordset5['EmriPunes']?></option>
                          <?php
} while ($row_Recordset5 = mysql_fetch_assoc($Recordset5));
  $rows = mysql_num_rows($Recordset5);
  if($rows > 0) {
      mysql_data_seek($Recordset5, 0);
	  $row_Recordset5 = mysql_fetch_assoc($Recordset5);
  }
?>
                      </select>
                      </label></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="44">Zgjedhni lokacionin   </td>
                      <td><select name="cmblokacioni" id="cmblokacioni">
                        <?php
do {  
?>
                        <option value="<?php echo $row_Recordset5['name']?>"><?php echo $row_Recordset6['name']?></option>
                        <?php
} while ($row_Recordset6 = mysql_fetch_assoc($Recordset6));
  $rows = mysql_num_rows($Recordset6);
  if($rows > 0) {
      mysql_data_seek($Recordset6, 0);
	  $row_Recordset6 = mysql_fetch_assoc($Recordset6);
  }
?>
                      </select></td><td>
					  <?php echo '<a href="harta.php">Harta</a>'; ?></td>
                      <td><input type="submit" name="button" id="button" value="Kerko" /></td>
                    </tr>
                  </table>
              </form>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="100%">&nbsp;
                     
                        <?php
						if ($totalRows_Recordset2!=0) 
						{
						do { ?>
                          <table width="100%" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                          <td><strong>PunaId</strong></td>
                          <td><strong><?php echo $row_Recordset2['PunaId']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>Emri I kompanise</strong></td>
                          <td><strong><?php echo $row_Recordset2['KompaniaEmri']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>Titulli i punes</strong></td>
                          <td><strong><?php echo $row_Recordset2['EmriPunes']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>Pozita e lire</strong></td>
                          <td><strong><?php echo $row_Recordset2['PozitaELire']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>Kualifikimi minimal</strong></td>
                           <td><strong><?php echo $row_Recordset2['MinKualifikimi']; ?></strong></td>
                           </tr>
                           <tr>
                          <td><strong>Pershkrimi</strong></td>
                          <td><strong><?php echo $row_Recordset2['Pershkrimi']; ?></strong></td>
                        </tr>
                        
                           <tr>
                             <td>&nbsp;</td>
                             <td><a href="Apliko.php?JobId=<?php echo $row_Recordset2['PunaId'];?>"><strong>Apliko per pune</strong></a></td>
                           </tr>
                        </table>
                        <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); 
						  
						  ?>
                      </table>
                      <?php
					  }
                      ?></td>
                  </tr>
                </table>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Statusi i punes</strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
                      <tr>
                        <th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Emri i kompanise</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Emri i punes</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Statusi</strong></div></th>
                         <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Pershkrimi</strong></div></th>
                      </tr>
                      <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root","123456");
// Select Database
mysql_select_db("puna", $con);
// Specify the query to execute
$sql = "SELECT punet.PunaId, punet.KompaniaEmri, punet.EmriPunes, aplikacioni.Status, aplikacioni.KerkoPunId, aplikacioni.Pershkrimi
FROM aplikacioni, punet
WHERE aplikacioni.PunaId=punet.PunaId and aplikacioni.KerkoPunId='".$_SESSION['ID']."'";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$KompaniaEmri=$row['KompaniaEmri'];
$EmriPunes=$row['EmriPunes'];
$Status=$row['Status'];
$Pershkrimi=$row['Pershkrimi'];

?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $KompaniaEmri;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $EmriPunes;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Status;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Pershkrimi;?></strong></div></td>
                         
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
                      <?php
// Close the connection
mysql_close($con);
?>
                    </table></td>
                  </tr>
                </table>
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
</div> <!-- /main -->

</body>
</html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset3);

mysql_free_result($Recordset4);

mysql_free_result($Recordset5);

mysql_free_result($Recordset2);
?>
