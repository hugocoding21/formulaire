<?php

if (!empty($_POST)) {

    if (
        isset($_POST["nom"], $_POST["prenom"], $_POST["mail"], $_POST["message"]) &&
        !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["mail"] && !empty($_POST["message"]))
    ) {
        header('location: index.php?code=1');
    } else {
        header('location: index.php?code=2');
    }
}