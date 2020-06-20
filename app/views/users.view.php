<?php require('partials/head.php'); ?>

    <h1>All Users</h1>

<?php foreach ($users as $user) : ?>
  <ul>
    <li><?= $user->username;?></li>
  </ul>

<?php endforeach; ?>

<?php require('partials/footer.php'); ?>
