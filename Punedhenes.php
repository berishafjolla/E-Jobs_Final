
<html>
<head>
   
    <title>E-Jobs</title>
   
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    
    <style type="text/css">

.style1 {
	color: #000066;
	font-weight: bold;
}
.style2 {font-weight: bold}

    </style>
</head>

<body id="www-url-cz">

<div id="main" class="box">
<?php 
include "Header.php"
?>
<?php 
include "menyja.php"
?>   

    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

            <hr class="noscreen" />

            <p id="breadcrumbs">&nbsp;</p>
          <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <div id="content">

           

            <hr class="noscreen" />

           

            <hr class="noscreen" />
            
           

            <hr class="noscreen" />

            <div class="article">
                <h2><span><a href="#">Punedhenesit tane</a></span></h2>
               

                <p>
                
              <table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
<tr>
<th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Emri i kompanise</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Personi kontaktues</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Email</strong></div></th>
</tr>
<?php
$con = mysql_connect("localhost","root","123456");

mysql_select_db("puna", $con);
$sql = "select * from punedhenesit where Status='Confirm'";
$result = mysql_query($sql,$con);
while($row = mysql_fetch_array($result))
{
$KompaniaEmri=$row['KompaniaEmri'];
$PersoniKontaktues=$row['PersoniKontaktues'];
$Email=$row['Email'];

?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $KompaniaEmri;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $PersoniKontaktues;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Email;?></strong></div></td>
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
</table>
    </td>
  </tr>
</table>
                </p>

                <div align="center"><a href="PunedhenesRegj.php"><strong>Punedhenes i ri? RegJistrohu ketu</strong></a>
                  </div>
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
