
<html>
<head>
  
    <title>E-Jobs</title>
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet"  type="text/css" href="./css/main.css" />
   
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
            
        </div>

   
        <div id="content">

           
           

            <hr class="noscreen" />

           
       

            <hr class="noscreen" />
            
            

            <hr class="noscreen" />

        
            <div class="article">
                <h2><span><a href="#">Lajmet e fundit</a></span></h2>
               

                <p>
                <table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
<tr>
  <th bgcolor="#006699" class="style3">&nbsp;</th>
<th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Lajmet</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Data e lajmeve</strong></div></th>
</tr>
<?php

$con = mysql_connect("localhost","root","123456");

mysql_select_db("puna", $con);

$sql = "select * from lajmet";

$result = mysql_query($sql,$con);
 
while($row = mysql_fetch_array($result))
{
$Lajmet=$row['Lajmet'];
$LajmetData=$row['LajmetData'];

?>
<tr>
  <td class="style3"><img src="design/ico_archive2.gif" alt="" width="9" height="11" /></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Lajmet;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $LajmetData;?></strong></div></td>
</tr>
<?php
}

$records = mysql_num_rows($result);
?>

<?php

mysql_close($con);
?>
</table>
    </td>
  </tr>
</table>
                </p>
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
