<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>


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
            
        </div> 

       
        <div id="content">

           
           

            <hr class="noscreen" />

           
         

            <hr class="noscreen" />
            
           

            <hr class="noscreen" />

            
            <div class="article">
                <h2><span><a href="#">Mire se erdhet<?php echo $_SESSION['Name'];?></a></span></h2>
               <?php
$ID=$_SESSION['ID'];
$con = mysql_connect("localhost","root","123456");

mysql_select_db("puna", $con);
$sql = "select * from punedhenesit where PunedhenesiId ='".$ID."'  ";
$result = mysql_query($sql,$con);
$row = mysql_fetch_array($result)
?>
<form method="post" action="UpdateProfili.php">
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td><strong>Kompania ID:</strong></td>
                    <td><span id="sprytextfield1">
                      <label>
                      <input name="txtId" type="text" id="txtId" value="<?php echo $row['PunedhenesiId'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">Te plotesohet fusha.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Emri i kompanise:</strong></td>
                    <td><span id="sprytextfield2">
                      <label>
                      <input name="txtName" type="text" id="txtName" value="<?php echo $row['KompaniaEmri'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">Te plotesohet patjeter.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Personi kontaktues:</strong></td>
                    <td><span id="sprytextfield3">
                      <label>
                      <input name="txtContact" type="text" id="txtContact" value="<?php echo $row['PersoniKontaktues'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">Te plotesohet fusha.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Adresa:</strong></td>
                    <td><span id="sprytextarea1">
                      <label>
                      <textarea name="txtAddress" id="txtAddress" cols="35" rows="3"><?php echo $row['Adresa'];?></textarea>
                      </label>
                    <span class="textareaRequiredMsg">Te plotesohet fusha.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Qyteto:</strong></td>
                    <td><span id="sprytextfield4">
                      <label>
                      <input name="txtCity" type="text" id="txtCity" value="<?php echo $row['Qyteti'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">Te plotesohet fusha.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Email:</strong></td>
                    <td><span id="sprytextfield5">
                      <label>
                      <input name="txtEmail" type="text" id="txtEmail" value="<?php echo $row['Email'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">Te plotesohet fusha.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Telefoni:</strong></td>
                    <td><span id="sprytextfield6">
                      <label>
                      <input name="txtMobile" type="text" id="txtMobile" value="<?php echo $row['Telefoni'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">Te plotesohet fusha.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Pozita e punes:</strong></td>
                    <td><span id="sprytextfield7">
                      <label>
                      <input name="txtArea" type="text" id="txtArea" value="<?php echo $row['Pozita'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">Te plotesohet fusha.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Shfrytezuesi:</strong></td>
                    <td><span id="sprytextfield8">
                      <label>
                      <input name="txtUser" type="text" id="txtUser" value="<?php echo $row['UserName'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">Te plotesohet fusha.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Fjalekalimi:</strong></td>
                    <td><span id="sprytextfield9">
                      <label>
                      <input name="txtPassword" type="password" id="txtPassword" value="<?php echo $row['Password'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">Te plotesohet fusha.</span></span></td>
                  </tr>
                  
                  <tr>
                    <td>&nbsp;</td>
                    <td><label>
                      <input type="submit" name="button" id="button" value="Submit" />
                    </label></td>
                  </tr>
                </table>
</form>
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
