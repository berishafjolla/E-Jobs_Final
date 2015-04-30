

<html>
<head>
    
    <title>E-Jobs</title>
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
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
                <h2><span><a href="#">Mire se erdhet</a></span></h2>
               

                <table width="100%" border="1" bordercolor="#1CB5F1" >
                  <tr>
                    <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Emri i Punekerkuesit</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Feedback</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Data</div></th>
                  </tr>
                 <?php
// Establish Connection with Database
$con = mysql_connect ("localhost","root","123456");
	
	mysql_select_db("puna", $con);
// Specify the query to execute
$sql = "select FeedbackId,Feedback,FeedbakData,PunkerkuesEmri from Feedback,punekerkuesit where Feedback.KerkoPunId=punekerkuesit.KerkoPunId";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['FeedbackId'];
$Emri=$row['PunkerkuesEmri'];
$Feedback=$row['Feedback'];
$FeedbakData=$row['FeedbakData'];

?>
                  <tr>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Emri;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Feedback;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $FeedbakData;?></strong></div></td>
                  </tr>
                  <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
                  <tr>
                    <td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Totali ".$records." fusha"; ?> </div></td>
                  </tr>
                  <?php
// Close the connection
mysql_close($con);
?>
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
