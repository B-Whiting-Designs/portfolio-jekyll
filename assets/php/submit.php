<?php
	// if the url field is empty
	if(isset($_POST['url']) && $_POST['url'] == ''){
		//email address here
		$youremail = 'bwhitingdesigns@gmail.com  ';
		
		//pretty version of the message
		$body = "This is the form that was just submitted:
		Name: $_POST[name]
		E-Mail: $_POST[email]
        Address: $_POST[address]
        Company: $_POST[company]
        Date Range: $_POST[dateStart] to $_POST[dateEnd]
        Budget: $_POST[budget]
		Message: $_POST[message]";
		
		//use submitters email if supplied
		//otherwise send from your email address
		
		if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
			$headers = "From: $_POST[email]";
		} else {
			$headers = "From: $youremail";
		}
		
		// finally, my message is sent
		mail($youremail, 'Contact Form', $body, $headers );
		}
?>

<h1>Thanks</h1>

We'll get back to you as soon as possible