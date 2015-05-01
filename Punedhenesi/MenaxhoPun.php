
<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>
<?php require_once('../Connections/puna.php'); ?>

<?php

mysql_select_db($database_job, $job);
$query_Recordset6 = "SELECT name  FROM markers";
$Recordset6 = mysql_query($query_Recordset6, $job) or die(mysql_error());
$row_Recordset6 = mysql_fetch_assoc($Recordset6);
$totalRows_Recordset6 = mysql_num_rows($Recordset6);
?>
<html>
<head>
    
<title>E-Jobs</title>
   
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
-->
    </style>
    
    <style type="text/css">
<!--
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
                <h2><span><a href="#">Mire se erdhet <?php echo $_SESSION['Name'];?></a></span></h2>
               

                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Menaxho Punen</strong></td>
                  </tr>
                  <tr>
                    <td><form id="form1" method="post" action="ShtoPun.php">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><strong>Titulli i punes:</strong></td>
                          <td><span id="sprytextfield1">
                            <label>
                            <input type="text" name="txtTitle" id="txtTitle" />
                            </label>
                          <span class="textfieldRequiredMsg">Te plotesohet.</span></span></td>
                        </tr>
                        <tr>
                          <td><strong>Pozita te lira:</strong></td>
                          <td><span id="sprytextfield2">
                            <label>
                            <input type="text" name="txtTotal" id="txtTotal" />
                            </label>
                          <span class="textfieldRequiredMsg">Te plotesohet.</span></span></td>
                        </tr>
                        <tr>
                          <td><strong>Kualifikimi:</strong></td>
                          <td><select name="cmbQual" id="cmbQual">
                            <option value="Bachelor">Bachelor</option>
                            <option value="Master">Master</option>
                            <option value="PhD">PhD</option>
                            <option value="Dr">Dr</option>
                            
                            
                            <option value="Tjeter">Tjeter</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td><strong>Tjeter:</strong></td>
                          <td><label>
                            <input type="text" name="txtOther" id="txtOther" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><strong>Pershkrimi:</strong></td>
                          <td><span id="sprytextarea1">
                            <label>
                            <textarea name="txtDesc" id="txtDesc" cols="25" rows="3"></textarea>
                            </label>
                          <span class="textareaRequiredMsg">Te plotesohet.</span></span></td>
                        </tr>
                        <tr>
                          <td><strong>Lokacioni:</strong></td>
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
                          </select></td> <td><?php echo '<a href="harta.php">Harta</a>'; ?></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><label>
                            <input type="submit" name="button" id="button" value="Submit" />
                          </label></td>
                        </tr>
                      </table>
                                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Puna e publikuar </strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" bordercolor="#1CB5F1" >
                      <tr>
                        <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Titulli i punes</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Pozita e lire</strong></div></th>
                         <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Kualifikimi</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Pershkrimi</strong></div></th>
                    
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Fshije</div></th>
                      </tr>
                      <?php
$con = mysql_connect ("localhost","root","123456");
	
	mysql_select_db("puna", $con);
$sql = "select * from punet where KompaniaEmri='".$_SESSION['Name']."'";


$result = mysql_query($sql,$con);
while($row = mysql_fetch_array($result))
{
$Id=$row['PunaId'];
$EmriPunes=$row['EmriPunes'];
$PozitaELire=$row['PozitaELire'];
$MinKualifikimi=$row['MinKualifikimi'];
$Pershkrimi =$row['Pershkrimi'];


?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $EmriPunes;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $PozitaELire;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $MinKualifikimi;?></strong></div></td>
                            <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Pershkrimi;?></strong></div></td>
                      <
                        <td class="style3"><div align="left" class="style9 style5"><strong><a href="FshiPun.php?JobId=<?php echo $Id;?>">Fshije punen</a></strong></div></td>
                      </tr>
                      <?php
}
$records = mysql_num_rows($result);
?>
                      <tr>
                        <td colspan="6" class="style3"><div align="left" class="style12"><?php echo "Totali ".$records." Fusha"; ?> </div></td>
                      </tr>
                      <?php
mysql_close($con);
?>
                    </table></td>
                  </tr>
                </table>
                <p>&nbsp;</p>

                <p class="btn-more box noprint">&nbsp;</p>
          </div> 

            <hr class="noscreen" />
            
        </div> 

<?php
include "Aside.php"
?>

    </div> 
    </div> 

 
<?php
include "footer.php"
?>
</div> 


</body>
</html>
