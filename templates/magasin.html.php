<?= $header ?>
<div class='container'>
    <h1 class='text-center'>Bienvenue au <?= $magasin->getName()?> !</h1>
    <h2>Ci dessous voici la liste des éléments en vente ici</h2>
</div>
<div class="container">
    <?php foreach($items as $item): ?>
        <pre>
            <?php var_dump($item)  ?>
        </pre>
        <p>
            Voici une <?= $item->getType() ?>
            <br>
            <?= $item->getName() ?>
            <br>
            <?= $item->getDescription() ?>
            <br>
            Prix: <?= $item->getPrice() ?>
        </p>
    <?php endforeach; ?>
</div>

<?= $footer ?>
