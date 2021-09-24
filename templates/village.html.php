<?= $header ?>
<div class='container'>
    <h1 class='text-center'>Bienvenue dans le village !</h1>
</div>
<div class="row">
    <a href="index.php?p=/magasin&name=<?= $magasin->getName() ?>" class="mr-auto">Visiter le <?= $magasin->getName() ?></a>
</div>
<div class='card' style='width: 18rem;'>

    <div class='card-body'>
        <h5 class='card-title'><?= $player->getName()?></h5>
        <div class='card-text'>
            <ul>
                <li>Race: <?= $player->getRace()?></li>
                <li>Classe: <?= $player->getClasse()?></li>
                <li>Point de vie: <?= $player->getHp()?></li>
                <li>Force: <?= $player->getStrength()?></li>
                <li>Intelligence: <?= $player->getIntel()?></li>
                <li>Agilité: <?= $player->getAgility()?></li>
                <li>Endurance: <?= $player->getStamina()?></li>
                <li>Items : <ul>
                        <?php foreach ($player->getItems()->getValues() as $item): ?>
                            <li><?= $item->getName() ?></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class='container'>
    <?php foreach ($monsters as $monster): ?>
        <a href='index.php?p=/fight&name=<?=$player->getName()?>&monster=<?=$monster->getName()?>'><?=$monster->getName()?></a>;
    <?php endforeach; ?>
</div>
<?= $footer ?>
