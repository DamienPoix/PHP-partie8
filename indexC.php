<?php
if (isset($_GET['login']) && isset($_GET['password'])) {
    $whut = $_GET['login'] . '&' . $_GET['password'];
    setcookie("banana", $whut, time() + 3600);
    echo $_COOKIE['banana'];
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
</head>
<body>
    <form action="#" method="GET">
        <label for="login"> identifiant  :</label><input type="text" name="login" id="login" placeholder="login"/> 
        <label for="password">Mot de passe : </label><input type="text" name="password" id="password" placeholder="password">
        <button type="submit" name="submit">Envoie</button>
    </form> 
</body>
</html>