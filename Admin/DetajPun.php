
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

           

            <hr class="noscreen" />
            
           

            <hr class="noscreen" />

            <div class="article">
                <h2><span><a href="#">Mire se erdhet</a></span></h2>
               

                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td></td>
                  </tr>
                  <tr>
                    <td>
                    <?php
$ID=$_GET['JobId'];
$con = mysql_connect ("localhost","root","123456");
	
	mysql_select_db("puna", $con);
$sql = "select * from punekerkuesit where KerkoPunId='".$ID."'  ";
$result = mysql_query($sql,$con);
$row = mysql_fetch_array($result)
?>
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                 <tr>
                    <td>Id:</td>
                    <td><?php echo $row['KerkoPunId'];?></td>
                  </tr>
                  <tr>
                    <td>Emri:</td>
                    <td><?php echo $row['PunkerkuesEmri'];?></td>
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
                    <td>Mobile:</td>
                    <td><?php echo $row['Telefoni'];?></td>
                  </tr>
                  <tr>
                    <td>Kualifkimi:</td>
                    <td><?php echo $row['Kualifikimi'];?></td>
                  </tr>
                  <tr>
                    <td>Gjiinia:</td>
                    <td><?php echo $row['Gjinia'];?></td>
                  </tr>
                  <tr>
                    <td>Datelindja:</td>
                    <td><?php echo $row['Datelindja'];?></td>
                  </tr>
                  <tr>
                    <td>Permbledhje:</td>
                    <td><a href="../upload/<?php echo $row['Permbledhje'];?>" target="_blank">Shiko</a></td>
                  </tr>
                  <tr>
                    <td><strong><a href="AprovoPun.php?JobId=<?php echo $row['KerkoPunId'];?>">Aprovo punekerkuesin</a></strong></td>
                    <td></td>
                  </tr>
                </table>
                    </td>
                  </tr>
                </table>
                <p>&nbsp;</p>

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
