<!DOCTYPE html>

<html lang="pt-br">

<head>

<!-- Links Bootstrap -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">

<!-- Links css -->
<link rel="stylesheet" href="../../../../public/css/styles.css">
<link rel="stylesheet" href="../../../../public/css/reset.css">
<link rel="stylesheet" href="../../../../public/css/bootstrap.min.css">

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

<main class="font-user prod">

<div  class="title-prod">
        <h1>Produto <?= '#' . $product->id; ?></h1>
    </div>

    <div class="col-sm flex-center">
        <img class="img-prod" src="/../../public/img/<?= $product->image ?>" width="250" height="250" alt="Produto <?= '#' . $product->id; ?>">
    </div>

    <div class="row table-prod" >
        <div class="col-sm-12 col-lg-12">

        <table class="table table-striped table-bordered table-responsive-md-1 table-responsive-sm-5">
           
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Detalhes</th>
                    <th scope="col">Descrição</th>
                </tr>
            </thead>

            <tbody>
    
                    <tr>
                        <td><?= '#' . $product->id; ?></td>
                        <td><?= $product->name; ?></td>
                        <td><?= $product->price; ?></td>
                        <td>

                            <?php if ($product->gender == "1") : ?>
                                Masculino

                            <?php elseif ($product->gender == "2") : ?>
                                Feminino

                            <?php elseif ($product->gender == "3") : ?>
                                Unissex
                            
                            <?php endif ?>

                        </td>
                        <td>

                            <?php if ($product->categories == "1") : ?>
                                Bermudas

                            <?php elseif ($product->categories == "2") : ?>
                                Blusas

                            <?php elseif ($product->categories == "3") : ?>
                                Bodies

                            <?php elseif ($product->categories == "4") : ?>
                                Calças

                            <?php elseif ($product->categories == "5") : ?> 
                                Conjuntos

                            <?php elseif ($product->categories == "6") : ?> 
                                Macacões

                            <?php elseif ($product->categories == "7") : ?> 
                                Pijamas

                            <?php elseif ($product->categories == "8") : ?>
                                Saias

                            <?php elseif ($product->categories == "9") : ?>
                                Vestidos

                            <?php endif ?>

                        </td>
                        <td><?= $product->details; ?></td>
                        <td><?= $product->description; ?></td>
                    </tr>
            
            </tbody>

        </table>
        </div>
    </div>

    <a href="/admin/productsadmin/products" class="btn btn-warning"><i class="fas fa-angle-left"></i> Voltar a Listagem </a>

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
