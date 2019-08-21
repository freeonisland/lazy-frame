<!doctype html>
<html lang="fr">
    <head>
        <title>Lazy-Frame framework</title>
        <link rel="stylesheet" type="text/css" href="public/assets/css/style.css"/>
    </head>
    <body>
        <header>
            <h1>LazyFrame~</h1>
        </header>
        <main>
            <?= $content ?>
        </main>
        <footer>
            <div><?= $debug ?></div>
            <div>Temps de chargement : 1.3ms</div>
            <div>Module [App] - Controller [Default] - Action [Index]</div>
            <div>Mémoire utilisée: 56ko</div>
        </footer>
    </body>
</html>