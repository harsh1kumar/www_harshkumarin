<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = "contact@harshkumar.in";
	$email_subject = "New form submission on harshkumar.in";
	
	$email_body = "Hi Harsh,\n\n"
					"You have received a new message on harshkumar.in\n\n".
					"Visitor Name: $name.\n".
					"Visitor Email: $visitor_email.\n".
					"Message: $message.\n\n";
	
	$email_to = "";
	$headers = "From: $email_from \r\n".
				"Reply-To: $visitor_email \r\n";
	
	mail($email_to, $email_subject, $email_body, $headers);
	header("Location: index.html");
?>
