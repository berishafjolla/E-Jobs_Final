        <!-- Right column -->
<?php
if(!isset($_SESSION))
{
session_start();
}
?>

<div id="col" class="noprint">
            <div id="col-in">

               
                <h3>Mire se erdhet</h3>

                <div id="about-me">
                    <p>
                    <?php 
					echo $_SESSION['Name'];
					?>
                    </p>
              </div> <!-- /about-me -->

                <hr class="noscreen" />

                <!-- Category -->
                <h3 >&nbsp;</h3>

              <br/>

      <hr class="noscreen" />

                <!-- Archive -->
                <h3>&nbsp;</h3>

                <br/>

            <hr class="noscreen" />

                <!-- Links -->
                <h3>&nbsp;</h3>
<br/>

<hr class="noscreen" />
          </div> <!-- /col-in -->
</div> 
<!-- /col -->
