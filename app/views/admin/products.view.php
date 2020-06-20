<!DOCTYPE html>

<html lang="pt-br">

<head>

<!-- Links Bootstrap -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">

<!-- Links css -->
<link rel="stylesheet" href="../../public/css/styles.css">
<link rel="stylesheet" href="../../public/css/reset.css">
<link rel="stylesheet" href="../../../public/css/bootstrap.min.css">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

<!-- Info site -->
<meta charset="utf-8">
<title>Da Lã | Lista de Produtos</title>
<link rel="sortcut icon" href="../../../public/img/Da_lã_Logo_2.png" type="image/x-icon">

<meta name="description" content="O melhor da moda infantil você encontra aqui na Da Lã, loja online de roupas infantis.">

</head>

<body>

<main class="font-user">

    <div class="container mt-5">
        <nav>
            <div>
            <a class="back-menu" href="#"><i class="fas fa-angle-left"></i> Voltar ao Menu</a>
            </div>
        </nav>

    <div class="col-sm flex-center text-center">
        <img src="/../../public/img/Da_lã_Logo_2.png" width="135" height="90" alt="Logotipo Da Lã">
    </div>

    <div  class="title-user">
        <h1>Listagem de Produtos</h1>
    </div>

    <div class="row" >
        <div class="col-sm-12 col-lg-12 tab_prod">
            <div>
                <a href="products/create" class="btn btn-primary button-add btn-sm"><i class="fas fa-plus"></i> Adicionar</a>               
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
                                <form class="cell_buttons" method="POST" action="/admin/products/prod">
                                    <input type="hidden" name="id" value="<?= $product->id ?>">
                                    <button class="btn btn-success button-actions button-action-view" type="submit"><span class="fas fa-eye"></span></button>
                                </form>
                                <form class="cell_buttons" method="POST" action="/admin/products/edit">
                                    <input type="hidden" name="id" value="<?= $product->id ?>">
                                    <button class="btn btn-warning button-actions button-action-edit" type="submit"><span class="fas fa-pen"></span></button>
                                </form>
                                <form class="cell_buttons" method="POST" action="/admin/products/delete">
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

<script src="../../../public/js/jquery-3.5.1.slim.min.js" ></script>
<script src="../../../public/js/popper.min.js"></script>
<script src="../../../public/js/bootstrap.min.js" ></script>	
	
</body>

<!-- Links Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js " integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49 " crossorigin="anonymous "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js " integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy " crossorigin="anonymous "></script>

</html>
