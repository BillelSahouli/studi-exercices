<!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?= $title?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header>
            <h1><?= $title?></h1>
        </header>
        <section>
            <nav>
                <ul>
                    <li><a href="/">Accueil</a></li>
                </ul>
            </nav>
            <?= $content ?>
        </section>
        <footer>
            <p>Mon blog - Tous droits réservés</p>
        </footer>
    </body>
</html>