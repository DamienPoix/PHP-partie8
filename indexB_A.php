<?php
//le session_start permet de démarrer une session
session_start();
$_SESSION['lastname'] = 'michou';
$_SESSION['firstname'] = 'polin';
$_SESSION['age'] = '139ans'
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2</title>
    </head>
    <body>
        <a href="indexB_B.php">Clique ici pour avoir les infos</a>
    </body>
</html>