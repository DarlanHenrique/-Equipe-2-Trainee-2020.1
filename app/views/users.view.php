<?php require('partials/head.php'); ?>

    <h1>All Users</h1>

<?php foreach ($users as $user) : ?>
 <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?= $user->email; ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<?php endforeach; ?>

<?php require('partials/footer.php'); ?>
