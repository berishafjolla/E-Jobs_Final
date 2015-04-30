
<html >
<head>
   
    
    <title>E-jobs</title>
  
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    
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
               

                <p> <span class="style2"><ul><li>Nuk lejohet kopjimi i kodit burimor pa lejen e FFM</li>
                <br><li>Ky web eshte i destinuar per personat mbi 18 vjeq qe jane te afte per pune.</li>
               <br> <li>Ne nuk japim pergjegjesi per marredheniet mes punedhenesve dhe punekerkuesve.</li>
                <br><li>Shfrytezuesit e ketij webi nuk kane nevoje per trajnim shtese pasi qe webi eshte i lehte per perdorim.</li><br><li><b>Regjistrimi eshte i obligueshem per te gjithe ata qe duan ta shfrytezojne sistemin qofshin perdorues te thjeshte apo kompani</b></li><br><li>Perdoruesi mund te regjistrohet duke perdorur te dhenat nga rrjetet sociale ose regjistrimi duhet te  behet manualisht duke plotesuar nje formular.</li>
                <br><li>Regjistrimi i shfrytezuesit perfshin te dhena si emrin dhe mbiemrin e shfrytezuesit,fjalekalimin te cilat e identifikojne ne menyre unike shfrytezuesin si dhe te dhenat per profesionin dhe edukimin e tyre.</li>
               <br> <li>Cdo perdorues e ka mundesine per te ofruar pune ne baze te nevojave te tij e cila jodomosdoshmerisht kerkon kontrate pune.Per ta bere nje pferte pune ai duhet te plotesoje nje formular ku duhet te specifikoje kerkesat e tij.Varesisht nga shkalla e edukimit qe punekerkuesi e ka zgjedhur sistemi i ben te qasshme per te gjithe punkerkuesit.</li><br><li>Ne momentin kur perdoruesi perfundon procesin e regjistrimit ai ka mundesine e kerkimit te punes varesisht nga informata qe kane dhene ne regjistrim</li></ul></p>
               <br><p> <?php
class Web {
	//definojme vetite
	
	public $EmriWebit;
	public $MoshaEshfrytezuesit;
	public $NdryshuesitEwebit;
	
	
	//definojme metodat
	
	public function emero()
	{
		echo $this->EmriWebit. " ka emrin web faqja jone\n";
		}
		
	public function lejo() 
	{
		echo $this->MoshaEshfrytezuesit. " mund ta perdorin web-in\n";
		}
		
	public function ndrysho() 
	{
		echo $this->NdryshuesitEwebit. " mund te bejne ndryshime ne web\n";
		}
		
	
	}
$objWeb = new Web;
$objWeb->EmriWebit = "E-Jobs";

$objWeb1 = new Web;
$objWeb1->MoshaEshfrytezuesit = "Personat mbi 18 vjet";

$objWeb2 = new Web;
$objWeb2->NdryshuesitEwebit = "Administratori";






print ("<h2>Rregullat kryesore</h2>");
$objWeb->emero();
echo "</br>";

$objWeb1->lejo();
echo "</br>";

$objWeb2->ndrysho();
echo "</br>";


?></p>
              
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
