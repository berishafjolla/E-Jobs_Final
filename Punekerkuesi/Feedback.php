

<html >
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
            <p id="breadcrumbs">Ju jeni ketu: <a href="index.php">Home</a></p>
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
                <h2><span><a href="#">Feedback </a></span></h2>
               

                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Jepni vleresimin tuaj</strong></td>
                  </tr>
                  <tr>
                    <td><form id="form1" method="post" action="ShtoFeed.php">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td>Feedback:</td>
                          <td><span id="sprytextarea1">
                            <label>
                            <textarea name="txtFeedback" id="txtFeedback" cols="35" rows="5"></textarea>
                            </label>
                          <span class="textareaRequiredMsg">Patjeter vlera kerkohet.</span></span></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><label>
                            <input type="submit" name="button" id="button" value="Konfirmo" />
                          </label></td>
                        </tr>
                      </table>
                                        </form>
                    </td>
                  </tr>
                </table>
                 <form method="post" action="email.php">
                 <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr><td>Nga:</td><td>
   <input type="text" name="from"></td></tr>
 <tr><td>Subject:</td><td>  <input type="text" name="subject"></td></tr>
 <tr><td>Mesazhi:</td><td>  <textarea rows="10" cols="40" name="message"></textarea></td></tr>
  <tr><td></td><td><input type="submit" name="submit" value="Dergo Feedback"></td></tr></table>
  </form>
 
                <p>&nbsp;</p>

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
