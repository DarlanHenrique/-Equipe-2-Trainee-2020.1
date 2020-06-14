<?php require('partials/head.php'); ?>

    <h1>All Users</h1>

<?php foreach ($users as $user) : ?>
    <li><?= $user->username; ?></li>
<?php endforeach; ?>

<?php require('partials/footer.php'); ?>
