<?php 
    require('session.php');
    session_unset();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="shortcut icon" href="img/meeting.png" type="image/x-icon">
    <link rel="stylesheet" href="css/exit.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud'Chat - Déconnexion</title>
</head>
<body>
    <div class="carte">
        <h1 class="titre">Tu as bien été déconnecté<br>mon p'tit loup</h1>
        <a id="btn" href="index.php">Retourner à l'accueil</a>
    </div>
</body>
</html>