<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>


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
                <h2><span><a href="#">Mire se erdhet<?php echo $_SESSION['Name'];?></a></span></h2>
               
<?php
$ID=$_SESSION['ID'];
$con = mysql_connect("localhost","root","123456");

mysql_select_db("puna", $con);
$sql = "select * from punedhenesit where PunedhenesiId='".$ID."'  ";
$result = mysql_query($sql,$con);
$row = mysql_fetch_array($result)
?>
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td><strong>Kompania ID:</strong></td>
                    <td><?php echo $row['PunedhenesiId'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Emri i kompanise:</strong></td>
                    <td><?php echo $row['KompaniaEmri'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Personi kontaktues:</strong></td>
                    <td><?php echo $row['PersoniKontaktues'];?></td>
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
                    <td><strong>Pozita:</strong></td>
                    <td><?php echo $row['Pozita'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Shfrytezuesi:</strong></td>
                    <td><?php echo $row['UserName'];?></td>
                  </tr>
                  
                  <tr>
                    <td>&nbsp;</td>
                    <td><a href="EditoProfil.php?EmployerId=<?php echo $row['PunedhenesiId']; ?>">Ndrysho profilin</a></td>
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
