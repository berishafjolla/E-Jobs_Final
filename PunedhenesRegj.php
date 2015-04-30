
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

    </style>
   
</head>

<body id="www-url-cz">
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
             [
			 		[
						["minlen=1",
		"Shkruani emrin e kompanise"
						  ]
					
                     ],
                   [
						  ["minlen=1",
		"Shkruani emrin e personit kontaktues"
						  ]
						  
                   ],
				   [
						["minlen=1",
		"Shkruani adresen"
						  ] 					  				
                   ],
                   [
						["minlen=1",
		"Shkruani qytetin"
						  ] 					  				
                   ],
				   [
						  
						["minlen=1",
		"Shkruani email adresen "
						  ], 
						  ["email",
		"Shkruani email valide "
						  ]  
                   ],
				   [
						   ["num",
		"Shkruani numrin e telefonit "
						  ],
						  ["minlen=5",
		"Shkruani numrin e telefonit"
						  ] 	  
                   ],
				   [
						  
					  ["minlen=1",
		"Shkruani poziten e punes"
						  ] 	
								 
						  
                   ],
				
				   [
						  ["minlen=1",
		"Shkruani shfrytezuesin "
						  ]
						 
						  
                   ],
				   [
						["minlen=1",
		"Shkruani fjalekalimin "
						  ]  
						  
						  
                   ],
				    [
						  
						
                   ],
				    [
						  
						  ["minlen=1",
		"Shkruani pergjigjen "
						  ]
						  
                   ]
				   
            ];
</SCRIPT>

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
                <h2><span><a href="#">Regjistrimi i punedhenesve</a></span></h2>
               <div class="login">

                <form action="ShtoPunedhenes.php" method="post" 
                onSubmit="returnvalidateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>Emri i kompanise:</td>
                      <td><span id="sprytextfield3">
                        <label>
                        <input type="text" name="txtName" id="txtName"  />
                        </label>
                      <span class="textfieldRequiredMsg">Shkruani emrin</span></span></td>
                    </tr>
                   
                    <tr>
                      <td>Personi kontaktues:</td>
                      <td><span id="sprytextfield8">
                        <label>
                        <input type="text" name="txtPerson" id="txtPerson" />
                        </label>
                      <span class="textfieldRequiredMsg">Shkruani personin kontaktues</span></span></td>
                    </tr>
                    <tr>
                      <td>Adresa:</td>
                      <td><span id="sprytextarea1">
                        <label>
                        <textarea name="txtAddress" id="txtAddress" cols="45" rows="5"></textarea>
                        </label>
                      <span class="textareaRequiredMsg">Shkruani adresen</span></span></td>
                    </tr>
                    <tr>
                      <td>Qyteti:</td>
                      <td><span id="sprytextfield4">
                        <label>
                        <input type="text" name="txtCity" id="txtCity" />
                        </label>
                      <span class="textfieldRequiredMsg">Shkruani qytetin</span></span></td>
                    </tr>
                    <tr>
                      <td>Email:</td>
                      <td><span id="sprytextfield5">
                        <label>
                        <input type="text" name="txtEmail" id="txtEmail" />
                        </label>
                      <span class="textfieldRequiredMsg">Shkruani e-mail</span></span></td>
                    </tr>
                    <tr>
                      <td>Telefoni:</td>
                      <td><span id="sprytextfield6">
                        <label>
                        <input type="text" name="txtMobile" id="txtMobile" />
                        </label>
                      <span class="textfieldRequiredMsg">Shkruani telefonin</span></span></td>
                    </tr>
                    <tr>
                      <td>Pozita e punes: </td>
                      <td><span id="sprytextfield7">
                      <input type="text" name="txtAreaWork" id="txtAreaWork" />
                      <span class="textfieldRequiredMsg">Shkruani poziten e punes</span></span></td>
                    </tr>
                    <tr>
                      <td>Shfrytezuesi:</td>
                    <td><span id="sprytextfield9">
                        <label>
                        <input type="text" name="txtUserName" id="txtUserName" />
                        </label>
                      <span class="textfieldRequiredMsg">Shkruani shfrytezuesin</span></span></td>
                    </tr>
                    <tr>
                      <td>Fjalekalimi:</td>
                      <td><label><span id="sprytextfield10">
                        <input type="password" name="txtPassword" id="txtPassword" />
                      <span class="textfieldRequiredMsg">Shkruani fjalekalimin</span></span></label></td>
                    </tr>
                    <tr>
                      <td>Pyetja e sigurise:</td>
                      <td><select name="cmbQue" id="cmbQue">
                        <option>Kenga e preferuar?</option>
                        <option selected="selected">Personi i preferuar?</option>
                        <option>Filmi i preferuar?</option>
                                                                  </select></td>
                    </tr>
                    <tr>
                      <td>Pergjigjja:</td>
                      <td><span id="sprytextfield11">
                      <label>
                      <input type="text" name="txtAnswer" id="txtAnswer" />
                      </label>
                      <span class="textfieldRequiredMsg">Shkruani pergjigjjen.</span></span></td>
                    </tr>
                    <tr>
                      <td colspan="2"><label>
                        <div align="center">
                          
                          </div>
                      </label></td>
                    </tr>
                    <tr><td>
                           <td><input type="checkbox" id="rregullat" value="1" onClick="Pajtohem(this)"> <a href="rregullat.php">Pajtohem me rregullat</a><br>
</td></tr>
<tr><td></td><td><input type="submit" VALUE="  Konfirmo  " id="submit_button" disabled></td></tr>
                  </table>
                 </form>
              </div>
              <p>&nbsp;</p>

                <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> 
        
<script type="text/javascript">
Pajtohem= function(v){
 var submitButton = document.getElementById("submit_button");
 if(v.checked == true){
  submitButton.disabled = false;
 }else{
  submitButton.disabled = true;
 }
}
</script>
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
