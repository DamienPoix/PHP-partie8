<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
    </head>
    <body>
        <p> Voici les valeurs que contient votre cookie : </p>       
        <p>
            <?php
            if (!empty($_COOKIE['banana'])) {
                echo $_COOKIE['banana'];
            } else {
                echo 'Le cookie n\'est pas activer';
            }
            ?>
        </p>
    </body>
</html>