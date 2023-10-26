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
                <form method="POST" action="form.php">
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
            </div>
        </div>
    </div>


</body>

</html>