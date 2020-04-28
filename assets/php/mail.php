<?php
	# the name of the input for sending the message for the form
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$website = $_POST['website'];
	$reason = $_POST['reason'];
	$message = $_POST['message'];

	# the form content itself that will be sent to email
	$formcontent = " From: $name \n Email: $email \n Phone: $phone \n Current Website: $website \n Request: $reason \n Additional Message: $message";

	# input my email for the receiver of the message
	$recipient = "brianwhiting@bwhitingdesigns.com";

	# the default subject header for the emails received
	$subject = "Contact Form Message";

	$mailheader = "From: $name via $email \r";

	if( mail($recipient, $subject, $formcontent, $mailheader)) {
		header("Location: /contact-me/success.html");
	} else {
		die ("Error, verify all information is correct and attempt again");
	}

	exit;
?>