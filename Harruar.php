
<html >
<head>
    
    
<title>E-Jobs</title>
    
    <link rel="index" href="./" title="index" />
    <link rel="stylesheet"  type="text/css" href="./css/main.css" />
    
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
include "menyja.php"
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

           
            <div class="article">
                <h2><span><a href="#">Mire se erdhet ne E-Jobs</a></span></h2>
               

                <form id="form2" method="post" action="HarruarFjal.php">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td align="left" valign="middle">Zgjedhni tipin e shfrytezuesit:</td>
                      <td><p>
                        <label>
                          <input type="radio" name="rdUser" value="Punedhenes" id="rdUser_0" />
                         Punedhenes</label>
                        <br />
                        <label>
                          <input type="radio" name="rdUser" value="Punekerkues" id="rdUser_1" />
                          Punekerkues</label>
                        <br />
                      </p></td>
                    </tr>
                    <tr>
                      <td>Shfrytezuesi:</td>
                    <td><span id="sprytextfield3">
                        <label>
                        <input type="text" name="txtUserName" id="txtUserName" />
                        </label>
                     Patjeter e plotesohet.</td>
                    </tr>
                    <tr>
                      <td>Pyetja e sigurise:</td>
                      <td><select name="cmbQue" id="cmbQue">
                        <option selected="selected">Kenga e preferuar?</option>
                        <option>Personi i preferuar?</option>
                        <option>Filmi i preferuar?</option>
                      </select></td>
                    </tr>
                    <tr>
                      <td>Pergjigjja:</td>
                      <td><span id="sprytextfield4">
                        <label>
                        <input type="text" name="txtAnswer" id="txtAnswer" />
                        </label>
                     Patjeter te plotesohet.</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><label>
                        <input type="submit" name="button2" id="button2" value="Konfirmo" />
                      </label></td>
                    </tr>
                  </table>
              </form>
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
</div> <!-- /main -->


</body>
</html>
