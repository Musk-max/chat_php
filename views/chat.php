<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat |hervelagouesh@gmail.com</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  
    <div class="chat">
        <div class="button_email">
            <span>hervelagouesh@gmail.com</span>
            <a href="#" class="deconnexion_btn">Deconnexion</a>
        </div>
        <!-- messages-->
        <div class="message_box">
            <div class="message your_message">
                <span>vous</span>
                <p>Comment ca va ??</p>
                <p class="date">26-12-01 00:25:26</p>
            </div>
            <div class="message others_message">
                <span>azerty@gmail.com</span>
                <p>oui ca va merci</p>
                <p class="date">26-12-01 00:25:26</p>
            </div>
        </div>
        <!--fin des messages -->
        <form action="" class="send_message" method="POST">
            <textarea name="message" cols="30" rows="2" placeholder="votre message"></textarea>
            <input type="submit" value="envoyé" name="send">
        </form>
        
    </div>
    
    
    
</body>
</html>