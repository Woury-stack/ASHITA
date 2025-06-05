<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Email de l'administrateur
    $to = "wourypoullo04@gmail.com"; // Remplacez par l'email de l'administrateur
    $subject = "Nouveau message de contact";

    // Contenu de l'email
    $body = "Nom: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    // En-têtes de l'email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        $successMessage = "Message envoyé avec succès!";
    } else {
        $successMessage = "Une erreur est survenue lors de l'envoi du message.";
    }
}
?>