<?php

if (!empty($_POST)) {

    if (
        isset($_POST["nom"], $_POST["prenom"], $_POST["mail"], $_POST["message"]) &&
        !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["mail"] && !empty($_POST["message"]))
    ) {

        echo ("Merci $nom, $prenom, vous êtes bien inscrit !");
    }
    else {
        echo("Désolé, veuillez vérifier vos informations, une erreur a été faite.");
    }
}
