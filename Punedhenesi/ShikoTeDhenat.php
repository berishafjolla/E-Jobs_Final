
<html >
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
                    <td bgcolor="#A0B9F3"><strong>Informacion personal</strong></td>
                  </tr>
                  <tr>
                    <td>
                    <?php
$ID=$_GET['JobSeekId'];
$con = mysql_connect("localhost","root","123456");

mysql_select_db("puna", $con);
$sql = "select * from punekerkuesit where KerkoPunId='".$ID."'  ";
$result = mysql_query($sql,$con);
$row = mysql_fetch_array($result)
?>
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td><strong>Emri:</strong></td>
                    <td><?php echo $row['PunkerkuesEmri'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Adresa:</strong></td>
                    <td><?php echo $row['Adresa'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Qyteti:</strong></td>
                    <td><?php echo $row['Qyteti'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Email:</strong></td>
                    <td><?php echo $row['Email'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Telefoni:</strong></td>
                    <td><?php echo $row['Telefoni'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Kualifikimi:</strong></td>
                    <td><?php echo $row['Kualifikimi'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Gjinia:</strong></td>
                    <td><?php echo $row['Gjinia'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Datelidnja:</strong></td>
                    <td><?php echo $row['Datelindja'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Permbledhje:</strong></td>
                    <td><a href="../upload/<?php echo $row['Permbledhje'];?>" target="_blank"><strong>Shiko</strong></a></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
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
					  $ID=$_GET['JobSeekId'];
$con = mysql_connect("localhost","root","123456");

mysql_select_db("puna", $con);
$sql = "select * from punekerkues_edukimi where KerkoPunId='".$ID."'";
$result = mysql_query($sql,$con);
while($row = mysql_fetch_array($result))
{
$Shkalla=$row['Shkalla'];
$Univ=$row['Universiteti'];
$Per=$row['Perqindja'];
?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Shkalla;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Univ;?></strong></div></td>
                        
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Per;?></strong></div></td>
                      </tr>
                      <?php
}
$records = mysql_num_rows($result);
?>
                      
                      <?php
mysql_close($con);
?>
                    </table></td>
                  </tr>
                </table>
                <?php
				$Status=$_GET['Status'];
				if($Status=="Apply")
				{
				?>
                <form id="form1" method="post" action="Ftesa.php?JobId=<?php echo $_GET['JobId'] ;?>&JobSeekId=<?php echo $_GET['JobSeekId'] ;?>&AppId=<?php echo $_GET['AppId'] ;?>">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><strong>Pershkrimi i letres qe dergohet:</strong></td>
<td><span id="sprytextarea1">
                        <label>
                        <textarea name="txtDesc" id="txtDesc" cols="35" rows="3"></textarea>
                        </label>
                      <span class="textareaRequiredMsg">Te plotesohet.</span></span></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><label>
                        <input type="submit" name="button" id="button" value="Submit" />
                      </label></td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
              </form>
              <?php
			  }
			  ?>
                <p align="center"><a href="Aplikacion.php"><strong>Prapa</strong></a></p>

              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->


    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->


</body>
</html>
