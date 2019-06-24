<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'info@petitpembrokes.co.uk';

	$email_subject = "NEW CUSTOMER ENQUIRY";

	$email_body = "Customer Name: $name.\n".
					"Customer Email: $email.\n".
						"Message: $message.\n";


	$to = "info@petitpembrokes.co.uk";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: contact.html");


?>