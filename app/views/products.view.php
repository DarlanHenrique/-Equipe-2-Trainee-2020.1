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
        <h1>Listagem de Produtos</h1>
    </div>

    <div class="row" >
        <div class="col-sm-12 col-lg-12">
            <div> 
                <button type="button" class="btn btn-primary button-add btn-sm" ><i class="fas fa-plus"></i> Adicionar</button>
            </div>
        <table class="table table-striped table-bordered table-responsive-md-1 table-responsive-sm-5">
           
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?= '#' . $product->id; ?></td>
                        <td><?= $product->name; ?></td>
                        <td><?= $product->price; ?></td>
                        <td>
                            <div>
                                <form class="cell_buttons" method="POST" action="/products/delete">
                                    <input type="hidden" name="id" value="<?= $product->id ?>">
                                    <button class="btn btn-success button-actions button-action-view"><span class="fas fa-eye"></span></button>
                                </form>
                                <form class="cell_buttons" method="POST" action="/products/delete">
                                    <input type="hidden" name="id" value="<?= $product->id ?>">
                                    <button class="btn btn-warning button-actions button-action-edit"><span class="fas fa-pen"></span></button>
                                </form>
                                <form class="cell_buttons" method="POST" action="/products/delete">
                                    <input type="hidden" name="id" value="<?= $product->id ?>">
                                    <button class="btn btn-danger button-actions button-action-delete"><span class="fas fa-trash"></span></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>  
            </tbody>

        </table>
        </div>
    </div>
</main>

<?php require('partials/footer.php'); ?>
