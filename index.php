
<html ><head>

   <script>
function loadXMLDoc()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","ajax.html",true);
xmlhttp.send();
}
</script>

    
    <title>E-jobs</title>
  
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" type="text/css" href="./css/main.css" />
    
    <style type="text/css">

.style1 {
	color: #000066;
	font-weight: bold;
}
.style2 {
	font-size: medium;
	font-weight: bold;
}

    </style>
</head>

<body >

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
                <h2><span><a href="#">Mire se  erdhet</a></span></h2>
               
<br>
<br>
                <?php
				
	$info1 = "ofrojne pune";
	$info2 = array("gjejne pune", "punes");
	//lidhja e anetareve te vektorit me reference
	$arr = array(&$info1, &$info2[0], &$info2[1]);
	$arr[0]; 
	$arr[1]; 
	$arr[2];
	/* $a == 2, $b == array(3, 4); */
	echo "Me E-Jobs pundhenesit e ndonje kompanie mund te ".$info1."<br>";
	echo "Me E-Jobs punekerkusit mund te ".$info2[0] ."<br>";
	echo "Me E-Jobs punetoret mund te infromohen rreth ".$info2[1] ."<br>";
?>
<div id="myDiv"><h2>Me shume..</h2></div>
<button type="button" onClick="loadXMLDoc()">Kliko ketu</button>
<br><br><br>
              <p align="right"> <img src="design/job.jpg" alt="" width="431" height="117" /></p>
              <p align="right"> <img src="design/nice.jpg" alt="" width="431" height="117" /></p>
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
