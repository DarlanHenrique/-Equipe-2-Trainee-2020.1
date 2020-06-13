<?php require('partials/head.php'); ?>



<h1>Submit Your Name</h1>

<form method="POST" action="/users">
    <input name="name"></input>
    <input name="email"></input>
    <input name="password"></input>
    <button type="submit">Submit</button>
</form>

<?php require('partials/footer.php'); ?>
