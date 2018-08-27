<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 2</title>
    </head>
    <body>
        <?php
        if(!empty($_SESSION['lastname']) && !empty($_SESSION['firstname']) && !empty($_SESSION['age'])){
        ?>
        <p>
            <?php    
            echo $_SESSION['lastname'] . ' ' . $_SESSION['firstname'] . ' ' . $_SESSION['age'];
            ?>
        </p>
        <?php
        } else {
         ?>
        <p><?= 'Aucune information'?></p>
        <?php } ?>
    </body>
</html>
