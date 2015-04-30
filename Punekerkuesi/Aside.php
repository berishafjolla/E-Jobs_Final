        <!-- Right column -->
<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<style type="text/css">
.style1 {font-size: 18px}
-->
</style>


<div id="col" class="noprint">
            <div id="col-in">

                <!-- About Me -->
                <h3>Mire se erdhet</h3>

                <div id="about-me">
                    <p class="style1">
                      <?php 
					echo $_SESSION['Name'];
					?>
                    </p>
              </div> 

                <hr class="noscreen" />

                <h3 >&nbsp;</h3>

              <br/>

      <hr class="noscreen" />

                <h3>&nbsp;</h3>

                <br/>

            <hr class="noscreen" />

                <h3>&nbsp;</h3>
<br/>

<hr class="noscreen" />
          </div> 
</div> 

