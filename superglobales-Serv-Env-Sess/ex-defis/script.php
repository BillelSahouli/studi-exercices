<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
session_start();
//if cookie countVisits not exist create a cookie countVisits with value = 1(int). else add +1 at countVisits
if (!isset($_COOKIE['countVisits'])) {
    setcookie('countVisits', 1, time() + 86400);
} else {
    $countVisits = (int)$_COOKIE['countVisits'] + 1;

    setcookie('countVisits', $countVisits, time() + 86400);
}

echo sprintf("Vous avez visité cette page %s fois <br/>", $_COOKIE['countVisits']);
//if the request equals GET and we have a SESSION with name & email...
if ('GET' === $_SERVER['REQUEST_METHOD']) {
    if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
        echo sprintf('Bienvenue %s, votre adresse e-mail est la suivante %s <br/>', $_SESSION['name'], $_SESSION['email']);
        echo sprintf('Votre adresse IP est la suivante : %s <br/>', $_SERVER['REMOTE_ADDR']);
    } else {
        ?>
        <form method="post" action="">
            <label for="name">Votre nom</label>
            <input type="text" name="name" id="name" required placeholder="Saisissez votre nom">

            <label for="email">Votre adresse e-mail</label>
            <input type="email" name="email" id="email" required placeholder="Saisissez votre e-mail">

            <button type="submit">Soumettre le formulaire</button>
        </form>
        <?php
    }
    //in case..is a POST request grab value of POST name & email & adds value to SESSION
} elseif ('POST' === $_SERVER['REQUEST_METHOD']) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
}

?>

</body>
</html>