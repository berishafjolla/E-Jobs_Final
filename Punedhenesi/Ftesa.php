

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

            <p id="breadcrumbs">Ju jeni ketu: <a href="index.php">Home</a></p>
          <hr class="noscreen" />
            
        </div> 
        <div id="content">

           
            

            <hr class="noscreen" />

           
           

            <hr class="noscreen" />
            
           
            <hr class="noscreen" />

            <!-- Article -->
            <div class="article">
                <h2><span><a href="#">Mire se erdhet</a></span></h2>
               
<?php
$PunaId=$_GET['JobId'];
$KerkoPunId=$_GET['JobSeekId'];
$AppId=$_GET['AppId'];
$Status="Ftesa eshte derguar";
$Pershkrimi=$_POST['txtDesc'];
$con = mysql_connect("localhost","root","123456");

mysql_select_db("puna", $con);
$sql = "Update aplikacioni set Status='".$Status."' ,Pershkrimi='".$Pershkrimi."' where AplikacionId=".$AppId." and PunaId='".$PunaId."' and KerkoPunId='".$KerkoPunId."'";
mysql_query($sql,$con);
mysql_close($con);
echo '<script type="text/javascript">alert("Ftesa per interviste eshte derguar me sukses");window.location=\'Aplikacion.php\';</script>';
?>
                
                <p>&nbsp;</p>

              <p class="btn-more box noprint">&nbsp;</p>
          </div> 

            <hr class="noscreen" />
            
        </div>

<?php
include "Aside.php"
?>

    </div> 
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->

</body>
</html>
