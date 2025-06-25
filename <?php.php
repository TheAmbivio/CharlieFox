<?php
<?php
$to = "martin@vacationhomesbycharlyfox.net";
$subject = "Neue Anfrage von Vacation Homes";
$message = "Name: " . $_POST['name'] . "\n";
$message .= "E-Mail: " . $_POST['email'] . "\n";
$message .= "Nachricht:\n" . $_POST['message'];
$headers = "From: noreply@deinedomain.de\r\n" .
           "Reply-To: " . $_POST['email'];

mail($to, $subject, $message, $headers);
header("Location: danke.html");
exit;
?>