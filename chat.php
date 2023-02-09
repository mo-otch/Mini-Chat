<?php
    include('session.php');
    // Vérification du champ login
    if (isset($_POST['login'])) {
        $_SESSION['login'] = addslashes($_POST['login']);
    }
    // var_dump($_SESSION);
    // Detruire la session
    // session_destroy();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="shortcut icon" href="img/groups.png" type="image/x-icon">
    <link rel="stylesheet" href="css/chat.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud'Chat - Chat</title>
</head>
<body>
    <div class="nav">
        <div class="titre">
            <h2>Cloud<br>Chat</h2>
            <img class="logo-site" src="img/meeting.png" alt="">
        </div>
        <div class="deconnexion">
            <?php
                // Message de bienvenue
                echo '<p> Hello ' . $_SESSION['login'] . '.</p>';
            ?>
            <!-- Bouton déconnexion -->
            <a class="btn-deconnexion" href="logout.php">Déconnexion</a>
        </div>
    </div>
    <!-- Formulaire d'envoi message -->
    <div class="carte">
        <form method="POST" class="formulaire-message">
            <img class="logo" src="img/groups.png">
            <label for="message">Tape ton message :</label>
            <input type="text" name="message" id="champ">
            <input type="submit" value="Envoyer" id="btn">
        </form>
        <?php
            // Vérification du champ message et lien entre le user et son message
            if (isset($_POST['message'])) {
                $_SESSION['messages'][] = array(
                    "message" => addslashes($_POST['message']),
                    "pseudo" => $_SESSION['login']
                );
            }

            foreach ($_SESSION['messages'] as $commentaire) {
                echo $commentaire['pseudo'] . " : " . $commentaire['message'] . "<br>";
            }
        ?>
    </div>
</body>
</html>