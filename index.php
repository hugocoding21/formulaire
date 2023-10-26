<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>contact</title>
</head>

<body>
    <div class="container">
        <div class="contact-box">
            <div class="right">
                <h2>Contact</h2>
                <form method="POST" action="error_or_success.php" id="formulaire">
                    <label for="nom"></label>
                    <input type="text" name="nom" id="nom" class="field" placeholder="Nom" required> <br><br>
                    <label for="prenom"></label>
                    <input type="text" name="prenom" id="prenom" class="field" placeholder="Prenom" required> <br><br>
                    <label for="mail"></label>
                    <input type="email" name="mail" id="mail" class="field" placeholder="Mail" required> <br><br>
                    <label for="message"></label>
                    <textarea type="message" name="message" id="message" placeholder="message" class="field"
                        required></textarea>
                    <button type="submit" class="btn" id="bang" name="submit">envoyer</button>
                    <?php

                            if (isset($_GET['code']) && !empty($_GET['code'])) {
                                switch ($_GET['code']) {
                                    case 1: 
                                        $msg = 'message correct';
                                        break;
                                } 
                                if (isset($msg)) {
                                    echo '<div class="success" role="success">' . $msg . '</div>';
                                } 
                            }
                            ?>
            </div>
        </div>
    </div>

    <script src="script.js"></script>

</body>

</html>