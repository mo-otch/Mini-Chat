<?php
    include('session.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="img/meeting.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud'Chat Login</title>
</head>
<body>
    <div class="titre">
        <h2>Cloud<br>Chat</h2>
        <img class="logo-site" src="img/meeting.png" alt="">
    </div>
    <div class="carte">
        <form action="chat.php" method="POST">
            <img class="logo" src="img/meeting.png" alt="Personnes qui se serre la main">
            <label for="">Entre ton pseudo :</label>
            <input type="text" name="login" id="champ">
            <input type="submit" value="Connexion" id="btn">
        </form>
    </div>
</body>
</html>