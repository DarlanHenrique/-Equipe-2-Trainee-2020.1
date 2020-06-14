<?php require('partials/head.php'); ?>

<main class="font-user">

    <div class="container mt-5">
        <nav>
            <div>
            <a class="back-menu" href="#"><i class="fas fa-angle-left"></i> Voltar ao Menu</a>
            </div>
        </nav>

    <div class="col-sm flex-center text-center">
        <img src="../../public/img/Da_lã_Logo_2.png" width="135" height="90" alt="Logotipo Da Lã">
    </div>

    <div  class="title-user">
        <h1>Adicionar Produto</h1>
    </div>

    <?php foreach ($products as $product) : ?>
        <li><strong>id: </strong><?= $product->id; ?></li>
        <li><strong>nome: </strong><?= $product->nome; ?></li>
        <li><strong>preço: </strong><?= $product->preco; ?></li>
        <li><strong>genero: </strong><?= $product->categoria; ?></li>
        <li>
            <form method="POST" action="/products/delete">
                <input type="hidden" name="id" value="<?= $product->id ?>">               
                <button type="submit" class="btn btn-danger">Delete</button>
        </li>
        <br>
    <?php endforeach; ?>

    <form method="POST" action="/products">
        <input name="id">
        <input name="nome">
        <input name="preco">
        <input name="categoria">
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
 
<?php require('partials/footer.php'); ?>
