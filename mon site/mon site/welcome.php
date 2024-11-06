<?php
session_start();

// Vérifier si l'utilisateur est connecté

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
</head>
<body>

    <h2>Bienvenue sur votre page !</h2>
    <p><?php echo $_SESSION['login_success']; ?></p>
    <a href="logout.php">Déconnexion</a>

</body>
</html>