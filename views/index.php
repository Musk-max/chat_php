<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <form action="" method="POST" class="form_connection_inscription">
        <h1>Connexion</h1>
        <p class="message_error">
            Mot de passe incorrect
        </p>
        <label for="">adresse mail</label>
        <input type="email" name="email" >
        <label for="">Mot de passe</label>
        <input type="password" name="mdp1" id="">
        <input type="submit" value="connexion" name="button_con">
        <p class="link">vous n'avez pas un compte ? <a href="inscription.php">creer un compte </a></p>
    </form>
    
</body>
</html>