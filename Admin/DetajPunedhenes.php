

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
            
        </div> <!-- /strip -->

        <div id="content">


            <hr class="noscreen" />

           
            <!-- /article -->

            <hr class="noscreen" />
            
           
            <hr class="noscreen" />

            
            <div class="article">
              <h2><span><a href="#">Mire se erdhet</a></span></h2>
               

               <?php
$ID=$_GET['EmpId'];
$con = mysql_connect ("localhost","root","123456");
	
	mysql_select_db("puna", $con);
$sql = "select * from punedhenesit where PunedhenesiId ='".$ID."'  ";
$result = mysql_query($sql,$con);
$row = mysql_fetch_array($result)
?>
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td>ID:</td>
                    <td><?php echo $row['PunedhenesiId'];?></td>
                  </tr>
                  <tr>
                    <td>Emri i kompanise:</td>
                    <td><?php echo $row['KompaniaEmri'];?></td>
                  </tr>
                  <tr>
                    <td>Personi kontaktues:</td>
                    <td><?php echo $row['PersoniKontaktues'];?></td>
                  </tr>
                  <tr>
                    <td>Adresa:</td>
                    <td><?php echo $row['Adresa'];?></td>
                  </tr>
                  <tr>
                    <td>Qyteti:</td>
                    <td><?php echo $row['Qyteti'];?></td>
                  </tr>
                  <tr>
                    <td>Email:</td>
                    <td><?php echo $row['Email'];?></td>
                  </tr>
                  <tr>
                    <td>Telefoni:</td>
                    <td><?php echo $row['Telefoni'];?></td>
                  </tr>
                  <tr>
                    <td>Pozita e punes:</td>
                    <td><?php echo $row['Pozita'];?></td>
                  </tr>
                  <tr>
                    <td><strong><a href="AprovoPunedhenes.php?EmpId=<?php echo $row['PunedhenesiId'];?>">Prano punedhenesin</a></strong></td>
                    <td>&nbsp;</td>
                  </tr>
                </table>


              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

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
