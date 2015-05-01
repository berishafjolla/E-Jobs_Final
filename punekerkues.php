

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
.style2 {font-weight: bold}
-->
    </style>
</head>

<body id="www-url-cz">
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
             [
			 		[
						  ["minlen=1",
		"Shkruani emrin"
						  ] 
					
                     ],
                   [
						   ["minlen=1",
		"Shkruani adresen "
						  ] 
						  
                   ],
                   [
						 
						 
					  
						  				
                   ],
				   [
						  
						  
                   ],
				   [
						  
						  
                   ],
				   [
						  
						  ["num",
		"Shkruani numrin e telefonit "
						  ],
						  ["minlen=10",
		"Shkruani numrin e telefonit"
						  ]
						 
						 
						  
                   ],
				   [
						   ["minlen=1",
		"Shkruani email adresen "
						  ], 
						  ["email",
		"Shkruani email adresen "
						  ]
						  
                   ],
				   [
						  
						  
                   ],
				   [
						  
						  ["minlen=1",
		"Ngarkoni cv "
						  ]
						  
                   ],
				   [
						  
					 ["minlen=1",
		"Shkruani shfrytezuesin "
						  ]	
                   ],
				   [
						  
						 ["minlen=1",
		"Shkruani fjalekalimin"
						  ] 
						  
                   ],
				   [
						  
						   ["minlen=1",
		"Konfirmoni fjalekalimin"
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
                <h2><span><a href="#">Punekerkuesit tane:</a></span></h2>
               

                <p>
                <table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
<tr>
<th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Emri i kompanise</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Personi kontaktues</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Email</strong></div></th>
</tr>
<?php

$con = mysql_connect("localhost","root","123456");

mysql_select_db("puna", $con);

$sql = "select * from punekerkuesit where Status='Confirm'";

$result = mysql_query($sql,$con);

while($row = mysql_fetch_array($result))
{
$PunkerkuesEmri=$row['PunkerkuesEmri'];
$Qyteti=$row['Qyteti'];
$Email=$row['Email'];

?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $PunkerkuesEmri;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Qyteti;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Email;?></strong></div></td>
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

                <div align="center"><a href="PunekerkuesRegj.php"><strong>Kerkoni pune? Regjistrohu ketu</strong></a>                  </div>
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
