<?php
if(!isset($_SESSION))
{
session_start();
}
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
.style2 {font-weight: bold}
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
                <h2><span><a href="#">Edukimi  </a></span></h2>
               

              <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Krijo profilin e edukimit</strong></td>
                  </tr>
                  <tr>
                    <td><form id="form1" method="post" action="ShtoEdu.php">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><strong>Zgjedh shkallen:</strong></td>
                          <td>
                          <select name="cmbQual" id="cmbQual">
                          <option value="Bachelor">Bachelor</option>
                          <option value="Master">Master</option>
                          <option value="PhD">PhD</option>
                          <option value="Dr">Dr</option>
                         
                          <option value="Tjeter">Tjeter</option>
                          </select>                          </td>
                        </tr>
                        <tr>
                          <td><strong>Tjeter shkalle:</strong></td>
                          <td><label>
                            <input type="text" name="txtOther" id="txtOther" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><strong>Universiteti:</strong></td>
                          <td><span id="sprytextfield1">
                            <label>
                            <input type="text" name="txtBoard" id="txtBoard" />
                            </label>
                          <span class="textfieldRequiredMsg">Patjeter te plotesohet fusha.</span></span></td>
                        </tr>
                        
                        <tr>
                          <td><strong>Perqindja(%)</strong></td>
                          <td><span id="sprytextfield2">
                            <label>
                            <input type="text" name="txtPer" id="txtPer" />
                            </label>
                          <span class="textfieldRequiredMsg">Patjeter fusha te plotesohet.</span></span></td>
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
                    <td bgcolor="#A0B9F3"><strong>Edukimi</strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
                      <tr>
                        <th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Shkalla</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Universiteti</strong></div></th>
                        
                         <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Perqindja</strong></div></th>
                      </tr>
                      <?php
					  $ID=$_SESSION['ID'];

$con = mysql_connect("localhost","root","123456");
// Select Database
mysql_select_db("puna", $con);

$sql = "select * from punekerkues_edukimi where KerkoPunId='".$ID."'";

$result = mysql_query($sql,$con);

while($row = mysql_fetch_array($result))
{
$Degree=$row['Shkalla'];
$Univ=$row['Universiteti'];
$Per=$row['Perqindja'];
?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Degree;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Univ;?></strong></div></td>
                       
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Per;?></strong></div></td>
                      </tr>
                      <?php
}

$records = mysql_num_rows($result);
?>
                      <tr>
                        <td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Totali ".$records." Fusha"; ?> </div></td>
                      </tr>
                      <?php

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
