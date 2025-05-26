<?php
if (isset($_POST['email'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    $to = "valentin.lorenz@chale-cosmetics.de"; 
    $subject = "Neue Newsletter-Anmeldung";
    $message = "Folgende E-Mail wurde neu eingetragen: $email";
    $headers = "From: newsletter@chale-cosmetics.de";

    if (mail($to, $subject, $message, $headers)) {
        echo "Danke für deine Anmeldung!";
    } else {
        echo "Fehler beim Versenden. Bitte versuch es später erneut.";
    }
} else {
    echo "Keine gültige Eingabe erkannt.";
}
?>
