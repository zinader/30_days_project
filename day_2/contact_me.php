<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = "aggarwalpulkit12@gmail.com";

	$email_subject = "[Re]: New Message on Website";

	$email_body = "User Name : $name.\n".
					"User Email : $visitor_email.\n".
						"Message : $message.\n".;


	$to = "pulkit@student.unimelb.edu.au";

	$headers = "From $email_from \r\n";

	$headers .= "Reply-To $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: contact_me.html");


?>