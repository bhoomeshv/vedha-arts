<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'vbr@arts.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Email: $subject.\n".
                "User Email: $message.\n".


$to = "bharath7286878317@gmail.com";

$header = "From: $enail_from\r\n".

$headers = "Reply-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>