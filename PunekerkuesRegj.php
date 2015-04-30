
<html>
<head>
    
    <title>Mire se erdhet ne E-Jobs</title>
    
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    
    <style type="text/css">

.style1 {
	color: #000066;
	font-weight: bold;
}

    </style>
    <style type="text/css">

.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	position: absolute;
	z-index: 32767;
}

.ds_tbl {
	background-color: #FFF;
}

.ds_head {
	background-color: #333;
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	text-align: center;
	letter-spacing: 2px;
}

.ds_subhead {
	background-color: #CCC;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}

.ds_cell {
	background-color: #EEE;
	color: #000;
	font-size: 13px;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	padding: 5px;
	cursor: pointer;
}

.ds_cell:hover {
	background-color: #F3F3F3;
} 

</style>

</head>
<body>

<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
<tr><td id="ds_calclass">
</td></tr>
</table>

<script type="text/javascript">

var ds_i_date = new Date();
ds_c_month = ds_i_date.getMonth() + 1;
ds_c_year = ds_i_date.getFullYear();


function ds_getel(id) {
	return document.getElementById(id);
}


function ds_getleft(el) {
	var tmp = el.offsetLeft;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetLeft;
		el = el.offsetParent;
	}
	return tmp;
}
function ds_gettop(el) {
	var tmp = el.offsetTop;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetTop;
		el = el.offsetParent;
	}
	return tmp;
}

// Output Element
var ds_oe = ds_getel('ds_calclass');
// Container
var ds_ce = ds_getel('ds_conclass');

// Output Buffering
var ds_ob = ''; 
function ds_ob_clean() {
	ds_ob = '';
}
function ds_ob_flush() {
	ds_oe.innerHTML = ds_ob;
	ds_ob_clean();
}
function ds_echo(t) {
	ds_ob += t;
}

var ds_element; // Text Element...

var ds_monthnames = [
'January', 'February', 'March', 'April', 'May', 'June',
'July', 'August', 'September', 'October', 'November', 'December'
]; // You can translate it for your language.

var ds_daynames = [
'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'
]; // You can translate it for your language.

// Calendar template
function ds_template_main_above(t) {
	return '<table cellpadding="3" cellspacing="1" class="ds_tbl">'
	     + '<tr>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_py();">&lt;&lt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_pm();">&lt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_hi();" colspan="3">[Close]</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_nm();">&gt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_ny();">&gt;&gt;</td>'
		 + '</tr>'
	     + '<tr>'
		 + '<td colspan="7" class="ds_head">' + t + '</td>'
		 + '</tr>'
		 + '<tr>';
}

function ds_template_day_row(t) {
	return '<td class="ds_subhead">' + t + '</td>';

}

function ds_template_new_week() {
	return '</tr><tr>';
}

function ds_template_blank_cell(colspan) {
	return '<td colspan="' + colspan + '"></td>'
}

function ds_template_day(d, m, y) {
	return '<td class="ds_cell" onclick="ds_onclick(' + d + ',' + m + ',' + y + ')">' + d + '</td>';
	
}

function ds_template_main_below() {
	return '</tr>'
	     + '</table>';
}


function ds_draw_calendar(m, y) {
	
	ds_ob_clean();
	
	ds_echo (ds_template_main_above(ds_monthnames[m - 1] + ' ' + y));
	for (i = 0; i < 7; i ++) {
		ds_echo (ds_template_day_row(ds_daynames[i]));
	}

	var ds_dc_date = new Date();
	ds_dc_date.setMonth(m - 1);
	ds_dc_date.setFullYear(y);
	ds_dc_date.setDate(1);
	if (m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12) {
		days = 31;
	} else if (m == 4 || m == 6 || m == 9 || m == 11) {
		days = 30;
	} else {
		days = (y % 4 == 0) ? 29 : 28;
	}
	var first_day = ds_dc_date.getDay();
	var first_loop = 1;
	
	ds_echo (ds_template_new_week());
	
	if (first_day != 0) {
		ds_echo (ds_template_blank_cell(first_day));
	}
	var j = first_day;
	for (i = 0; i < days; i ++) {

		if (j == 0 && !first_loop) {
			
			ds_echo (ds_template_new_week());
		}
		
		ds_echo (ds_template_day(i + 1, m, y));
		
		first_loop = 0;
		
		j ++;
		j %= 7;
	}

	ds_echo (ds_template_main_below());
	
	ds_ob_flush();
	
	ds_ce.scrollIntoView();
}


function ds_sh(t) {
	
	ds_element = t;
	
	var ds_sh_date = new Date();
	ds_c_month = ds_sh_date.getMonth() + 1;
	ds_c_year = ds_sh_date.getFullYear();
	
	ds_draw_calendar(ds_c_month, ds_c_year);
	
	ds_ce.style.display = '';
	
	the_left = ds_getleft(t);
	the_top = ds_gettop(t) + t.offsetHeight;
	ds_ce.style.left = the_left + 'px';
	ds_ce.style.top = the_top + 'px';
	
	ds_ce.scrollIntoView();
}


function ds_hi() {
	ds_ce.style.display = 'none';
}


function ds_nm() {

	ds_c_month ++;
	
	if (ds_c_month > 12) {
		ds_c_month = 1; 
		ds_c_year++;
	}

	ds_draw_calendar(ds_c_month, ds_c_year);
}


function ds_pm() {
	ds_c_month = ds_c_month - 1; 
	if (ds_c_month < 1) {
		ds_c_month = 12; 
		ds_c_year = ds_c_year - 1;
	}

	ds_draw_calendar(ds_c_month, ds_c_year);
}

function ds_ny() {
	
	ds_c_year++;
	
	ds_draw_calendar(ds_c_month, ds_c_year);
}


function ds_py() {

	ds_c_year = ds_c_year - 1; 
	ds_draw_calendar(ds_c_month, ds_c_year);
}


function ds_format_date(d, m, y) {
	
	m2 = '00' + m;
	m2 = m2.substr(m2.length - 2);

	d2 = '00' + d;
	d2 = d2.substr(d2.length - 2);
	
	return y + '-' + m2 + '-' + d2;
}


function ds_onclick(d, m, y) {
	
	ds_hi();
	
	if (typeof(ds_element.value) != 'undefined') {
		ds_element.value = ds_format_date(d, m, y);

	} else if (typeof(ds_element.innerHTML) != 'undefined') {
		ds_element.innerHTML = ds_format_date(d, m, y);
	
	} else {
		alert (ds_format_date(d, m, y));
	}
}


</script>
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
    
</head>

<body id="www-url-cz">

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
		"Shkruani email "
						  ], 
						  ["email",
		"Shkruani e-mail sakte "
						  ]  
                   ],
				   [
						   ["num",
		"Shkruani numrin e telefonit sakte "
						  ],
						  ["minlen=5",
		"Shkruani numrin e telefonit sakte "
						  ],
						  ["maxlen=10",
		"Shkruani numrin e telefonit sakte "
						  ] 	  
                   ],
				   [
						  
						
								 
						  
                   ],
				   [
						   
						  
                   ],
				   [
						  
						  
                   ],
				   [
						  
						["minlen=1",
		"Shkruani daten e lindjes "
						  ]
						  
                   ],
				   [
						  
					 ["minlen=1",
		"Ngarkoni CV "
						  ]
                   ],
				   [
						  ["minlen=1",
		"Shkruani shfrytezuesin"
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
		"Shkruani pergjigjjes "
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
                <h2><span><a href="#">Formulari per regjistrim</a></span></h2>
               

                    <div class="login">

                <form action="shtoPunekerkues.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>Emri:</td>
                      <td><span id="sprytextfield3">
                        <label>
                        <input type="text" name="txtName" id="txtName" />
                        </label>
                      <span class="textfieldRequiredMsg">Shkruani emrin</span></span></td>
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
                        <input type="text" name="txtEmail" id="txtEmail"  />
                        </label>
                      <span class="textfieldRequiredMsg">Shkruani email-in</span></span></td>
                    </tr>
                    <tr>
                      <td>Telefoni:</td>
                      <td><span id="sprytextfield6">
                        <label>
                        <input type="text" name="txtMobile" id="txtMobile" />
                        </label>
                      <span class="textfieldRequiredMsg">Shkruani numrin e telefonit</span></span></td>
                    </tr>
                    <tr>
                      <td>Kualifikimi:</td>
                      <td><label>
                        <select name="cmbQual" id="cmbQual">
                          <option value="Bachelor">Bachelor</option>
                          <option value="Master">Master</option>
                          <option value="PhD">PhD</option>
                          <option value="Dr">Dr</option>
                          
                          <option value="Tjeter">Tjeter kualifikim</option>
                        </select>
                      </label></td>
                    </tr>
                    <tr>
                      <td>Tjeter kualifikim:</td>
                      <td><label>
                        <input type="text" name="txtOther" id="txtOther" />
                      </label></td>
                    </tr>
                    <tr>
                      <td>Gjinia:</td>
                      <td><label>
                        <select name="cmbGender" id="cmbGender">
                          <option value="Femer">Femer</option>
                          <option value="Mashkull">Mashkull</option>
                        </select>
                      </label></td>
                    </tr>
                    <tr>
                      <td>Datelindja:</td>
                      <td><span id="sprytextfield7">
                        <label>
                        <input type="text" name="txtBirthDate" onClick="ds_sh(this);" id="txtBirthDate" />
                        </label>
                      <span class="textfieldRequiredMsg">Shkruani daten e lindjes</span></span></td>
                    </tr>
                    <tr>
                      <td>Ngarkoni CV:</td>
                      <td><label>
                        <input type="file" name="txtFile" id="txtFile" />
                      </label></td>
                    </tr>
                    <tr>
                      <td>Shfrytezuesi:</td>
                    <td><span id="sprytextfield8">
                        <label>
                        <input type="text" name="txtUserName" id="txtUserName" />
                        </label>
                      <span class="textfieldRequiredMsg">Shkruani shfrytezuesin</span></span></td>
                    </tr>
                    <tr>
                      <td>Fjalekalimi:</td>
                      <td><label><span id="sprytextfield9">
                        <input type="password" name="txtPassword" id="txtPassword" />
                      <span class="textfieldRequiredMsg">Shkruani fjalekalimin</span></span></label></td>
                    </tr>
                    <tr>
                      <td>Pyetja e sigurise:</td>
                      <td><label>
                        <select name="cmbQue" id="cmbQue">
                          <option selected="selected">Personi i preferuar?</option>
                          <option>Kenga e preferuar?</option>
                          <option>Filmi i preferuar?</option>
                        </select>
                      </label></td>
                    </tr>
                    <tr>
                      <td>Pergjigjja:</td>
                      <td><span id="sprytextfield10">
                        <label>
                        <input type="text" name="txtAnswer" id="txtAnswer" />
                        </label>
                      <span class="textfieldRequiredMsg">Shkruani pergjigjen.</span></span></td>
                    </tr>
                    <tr>
                      <td colspan="2"><label>
                        <label></label>
                        <div align="center">
                          
                          <tr><td>
                           <td><input type="checkbox" id="rregullat" value="1" onClick="Pajtohem(this)"> <a href="rregullat.php">Pajtohem me rregullat</a><br>
</td></tr>
<tr><td></td><td><input type="submit" VALUE="  Submit  " id="submit_button" disabled></td></tr>
                          </div>
                      </label></td>
                     
                    </tr>
                  </table>
                 </form>
              </div>

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
</body>
</html>
