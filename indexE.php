
<!DOCTYPE html>
<html lang="fr" dir="ltr" />
<head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
</head>
<body>
    <form action="indexD.php" method="GET">
        <label for="login"> identifiant  :</label><input type="text" name="login" id="login" placeholder="login"/> 
        <label for="password">Mot de passe : </label><input type="text" name="password" id="password" placeholder="password">
        <button type="submit" name="submit">Envoyer</button>
    </form> 
    <p>
        <?php
        if (!empty($_GET['login']) && !empty($_GET['password'])) {
            $whut = $_GET['login'] . ' ' . $_GET['password'];
            setcookie('banana', $whut, time() + 3600);
        }
        ?>  
    </p>
</body>
</html>