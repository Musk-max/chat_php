<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form action="" class="form_connection_inscription">
        <h1>Inscription</h1>
        <p class="message_error">
            
        </p>
        <label for="">adresse mail</label>
        <input type="email" name="email" >
        <label for="">Mot de passe</label>
        <input type="password" name="mdp1" class="mdp1">
        <label for="">Confirmation du Mot de passe</label>
        <input type="password" name="mdp2" class="mdp2">
        <input type="submit" value="inscription">
        <p class="link">Avez vous un compte ? <a href="index.php">Se connecter</a></p>
    </form>
    <script src="script.js"></script>
</body>
</html>