<?php require('partials/head.php'); ?>

<?php foreach ($users as $product) : ?>
    <li><?= $product->nome; ?></li>
    <li><?= $product->preco; ?></li>
    <br>
<?php endforeach; ?>

<?php require('partials/footer.php'); ?>