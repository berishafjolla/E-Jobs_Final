 <?php 
   
  if (isset($_POST["from"])) {
    $from = $_POST["from"]; 
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $message = wordwrap($message, 70);
    mail("ffm@gmail.com",$subject,$message,"From: $from\n");
   	echo '<script type="text/javascript">alert("Email u dergua me sukses");window.location=\'Feedback.php\';</script>';
  }
 
?>