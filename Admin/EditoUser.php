

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
.style10 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; color: #FFFFFF; }
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; }
-->
    </style>
   
    <style type="text/css">
<!--
.style11 {color: #192666}
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
            <p id="breadcrumbs">Ju jeni ketu: <a href="index.php">Home</a></p>
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
               

                <table width="100%" height="209" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="33" bgcolor="#A0B9F3"><span class="style10 style11">Ndrysho fushen</span></td>
                  </tr>
                  <tr>
                    <td><?php
$Id=$_GET['UserId'];
$con = mysql_connect ("localhost","root","123456");
	
	mysql_select_db("puna", $con);
$sql = "select * from shfrytezuesit where UserId=".$Id."";
$result = mysql_query($sql,$con);
while($row = mysql_fetch_array($result))
{
$Id=$row['UserId'];
$Emri=$row['UserName'];
$Fjalekalimi=$row['Password'];
}
?>
                        <form method="post" action="UpdateUser.php">
                          <table width="100%" border="0">
                            <tr>
                              <td height="32"><span class="style8">Shfrytezuesi Id</span></td>
                              <td><span id="sprytextfield1">
                                <label>
                                <input name="txtUserId" type="text" id="txtUserId" value="<?php echo $Id;?>" />
                                </label>
                                <span class="textfieldRequiredMsg">Te plotesohet vlera.</span></span></td>
                            </tr>
                            <tr>
                              <td height="36"><span class="style8">Emri i shfrytezuesit:</span></td>
                              <td><span id="sprytextfield2">
                                <label>
                                <input name="txtUserName" type="text" id="txtUserName" value="<?php echo $Emri;?>" />
                                </label>
                                <span class="textfieldRequiredMsg">Te plotesohet vlera.</span></span></td>
                            </tr>
                            <tr>
                              <td height="36"><span class="style8">Fjalekalimi:</span></td>
                              <td><span id="sprytextfield3">
                                <label>
                                <input name="txtPass" type="password" id="txtPass" value="<?php echo $Fjalekalimi;?>" />
                                </label>
                                <span class="textfieldRequiredMsg">Te plotesohet vlera.</span></span></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><input type="submit" name="submit" value="Ndrysho" /></td>
                            </tr>
</table>
                        </form>
                        <?php
// Close the connection
mysql_close($con);
?>
                        <form method="post" action="UpdateUser.php">
                          <table width="100%" border="0">
                          </table>
                        </form></td>
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

    </div> 
    </div> 

 
<?php
include "footer.php"
?>
</div> 


</body>
</html>
