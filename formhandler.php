<?php
$name=$_POST["name"];
$visitor_email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$email_form="ranjeet9899yadav@gmail.com";

$email_subject="New form submission";

$email_body="User name:$name.\n".
            "User Email:$visitor_email.\n".
            "Subject:$subject.\n".
            "User message:$message.\n".

$to = "ranjeet7075yadav@gmail.com";
$headers = "form: $email_form\r\n";

$headers = "reply- to: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");

?>
