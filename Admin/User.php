


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
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

            <hr class="noscreen" />

            <p id="breadcrumbs">&nbsp;</p>
          <hr class="noscreen" />
            
        </div> 
        <div id="content">

           

            <hr class="noscreen" />


            <hr class="noscreen" />
          

            <hr class="noscreen" />

            <div class="article">
              <h2><span><a href="#">Mire se erdhet</a></span></h2>
               

                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="27" bgcolor="#A0B9F3"><strong>Krijo shfrytezues te ri</strong></td>
        </tr>
        <tr>
          <td height="26"><form id="form1" name="form1" method="post" action="ShtoUser.php">
            <table width="100%" height="95" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="35"><span class="style10">Shfrytezuesi:</span></td>
                <td><span id="sprytextfield1">
                  <label>
                  <input type="text" name="txtUserName" id="txtUserName" />
                  </label>
                  <span class="textfieldRequiredMsg">Te plotesohet vlera.</span></span></td>
              </tr>
              <tr>
                <td><span class="style10">Fjalekalimi:</span></td>
                <td><span id="sprytextfield2">
                  <label>
                  <input type="password" name="txtPassword" id="txtPassword" />
                  </label>
                  <span class="textfieldRequiredMsg">Te plotesohet vlera.</span></span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><label>
                  <input type="submit" name="button" id="button" value="Konfirmo" />
                </label></td>
              </tr>
            </table>
                    </form>            </td>
        </tr>
        <tr>
          <td height="25" bgcolor="#A0B9F3"><strong>Lista me shfrytezues</strong></td>
        </tr>
        <tr>
          <td>
          <table width="100%" border="1" bordercolor="#1CB5F1" >
<tr>
<th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Shfrytezues</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Ndrysho</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Fshije</div></th>
</tr>
<?php
// Establish Connection with Database
$con = mysql_connect("localhost","root","123456");

mysql_select_db("puna", $con);
$sql = "select * from shfrytezuesit";
$result = mysql_query($sql,$con);
while($row = mysql_fetch_array($result))
{
$Id=$row['UserId'];
$Shfrytezuesi=$row['UserName'];

?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Shfrytezuesi;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><a href="EditoUser.php?UserId=<?php echo $Id;?>">Ndrysho</a></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><a href="FshiUser.php?UserId=<?php echo $Id;?>">Fshije</a></strong></div></td>
</tr>
<?php
}
$records = mysql_num_rows($result);
?>
<tr>
<td colspan="4" class="style3"><div align="left" class="style12"><?php  $a=array($records, "."); echo "Totali ".$a[0]." fusha".$a[1]; ?> </div></td>
</tr>
<?php
mysql_close($con);
?>
</table>
          </td>
        </tr>
      </table>

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
