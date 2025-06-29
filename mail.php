<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = strip_tags($_POST["name"]);
    $email   = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = strip_tags($_POST["message"]);

    $to      = "martin@vacationvillas-by-charliefox.net";
    $subject = "Neue Nachricht von der Website";
    $body    = "Name: $name\nE-Mail: $email\nNachricht:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Danke für deine Nachricht!";
    } else {
        echo "Fehler beim Senden. Bitte versuche es später erneut.";
    }
}
?>