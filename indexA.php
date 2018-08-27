<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>0
        <meta charset="utf-8" />
        <title>Exercice 1</title>
    </head>
    <body>
        <p>
            <?php //permet de récuperer le user agent?>
            <?= $_SERVER['HTTP_USER_AGENT'] ?>
        </p>
        <p>
            <?php //permet de récuperer l'ip de la personne?>
            <?= $_SERVER['REMOTE_ADDR'] ?>
        </p>
        <p>
            <?php //permet de récuperer le nom du serveur?>
            <?= $_SERVER['SERVER_NAME'] ?>
        </p>
    </body>
</html>
