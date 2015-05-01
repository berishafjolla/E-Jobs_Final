
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
.style3 {font-weight: bold}
-->
    </style>
</head>

<body id="www-url-cz">
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
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" bordercolor="#1CB5F1" >
                      <tr>
                        <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Emri</strong></div></th>
                         <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Qyteti</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Gjinia</div></th>
                         <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Detaj</strong></div></th>
                       
                      </tr>
                      <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root","123456");

mysql_select_db("puna", $con);
$sql = "select * from punekerkuesit where Status='Pending'";
$result = mysql_query($sql,$con);
while($row = mysql_fetch_array($result))
{
$Id=$row['KerkoPunId'];
$Emri=$row['PunkerkuesEmri'];
$Qyteti=$row['Qyteti'];
$Gjinia=$row['Gjinia'];

?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Emri;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Qyteti;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Gjinia;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><a href="DetajPun.php?JobId=<?php echo $Id;?>">Detaj</a></strong></div></td>
                       
                      </tr>
                      <?php
}
$records = mysql_num_rows($result);
?>
                      <tr>
                        <td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Totali ".$records." fusha"; ?> </div></td>
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

    </div> 
    </div> 

 
<?php
include "footer.php"
?>
</div> 
</body>
</html>
