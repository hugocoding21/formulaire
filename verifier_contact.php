<?php

if (!empty($_POST)) {

    if (
        isset($_POST["nom"], $_POST["prenom"], $_POST["mail"], $_POST["message"]) &&
        !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["mail"] && !empty($_POST["message"]))
    ) {

        echo ($nom = ucwords(strtolower(htmlspecialchars(strip_tags($_POST["nom"])))) . '<br>');

        echo ($prenom = ucwords(strtolower(htmlspecialchars(strip_tags($_POST["prenom"])))) . '<br>');

        echo ($mail = strtolower(htmlspecialchars(strip_tags($_POST["mail"]))) . '<br>');

        echo ($message = htmlspecialchars(strip_tags($_POST["message"])));
    }
}
