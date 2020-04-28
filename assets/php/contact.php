<?php
	$name = $_POST["inputName"];
	$email = $_POST["inputEmail"];
	$message = $_POST["inputMessage"];

	$EmailTo = "bwhitingdesigns@gmail.com";
	$Subject = "New Message Received";

	//body email text
	$Body .= "Name: ";
	$Body .= $name;
	$Body .= "\n";

	$Body .= "Email: ";
	$Body .= $email;
	$Body .= "\n";

	$Body .= "Message: ";
	$Body .= $message;
	$Body .= "\n";

	//send email
	$success = mail($EmailTo, $Subject, $Body, "From:".$email);

	//redirect to success page
	if ($success){
		echo "success";
	} else {
		echo "invalid";
	}



?>