<p class="accueil">
    Bienvenue sur votre page d'accueil
</p>
<div class="loaded">
    <h3>Composants chargés (<?php echo count($loaded)." sur {$count}"; ?>)</h3>
    <ul>
        <?php foreach($loaded as $item) echo "<li>$item</li>"; ?>
    </ul>
</div>
<div class="dispo">
    <h3>Composants disponibles (<?php echo count($notLoaded)." sur {$count}"; ?>)</h3>
    <ul>
    <?php foreach($notLoaded as $item) echo "<li>$item</li>"; ?>
    </ul>
</div>