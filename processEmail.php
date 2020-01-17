<?php
//http://www.bryanl.us/wdv341/emailer_class/processEmail.php
//http://localhost/wdv341/emailer_class/processEmail.php
include "Emailer.php";

$senders_address="bclitscher@dmacc.edu";
$send_to_address="info@bryanl.us";
$subject_line="Subject Line";
$message="This is a message";


?>


<!DOCTYPE html>

<html lang="en">

	<head>
		<!-- <link href="style.css" rel="stylesheet" type="text/css" /> -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>WDV341 Emailer Class</title>
		<style>
			body{background-color:linen}
		</style>

	</head>

	<body>
			
		<?php $me = new Emailer($senders_address); ?>
		<p>Sender's address: <?php echo $me->get_senders_address() ;?> </p>

		<?php $me->set_send_to_address($send_to_address);?>
		<p>Send-to address: <?php echo  $me->get_send_to_address() ;?></p>

		<?php $me->set_subject_line($subject_line); ?>
		<p>Subject: <?php echo $me->get_subject_line();?></p>

		<?php $me->set_message($message);?>
		<p>Message: <?php echo $me->get_message();?></p>

		<?php print_r( $me );?>

		<p>
		<?php 
		if ($me->sendEmail( )) {
			echo "Mail sent successfully";
		}else { echo "Mail failed";}
		?>
		</p>

	</body>
	
	


</html>
