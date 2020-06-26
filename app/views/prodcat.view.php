<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">


    <title>Da Lã | Roupas Infantis</title>
    <meta name="description" content="O melhor da moda infantil você encontra aqui na Da Lã, loja online de roupas infantis.">

    <link rel="stylesheet" href="/../public/css/reset.css">
    <link rel="stylesheet" href="/../public/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

    <link rel="sortcut icon" href="/../public/img/Da_lã_Logo_2.png" type="image/x-icon">
</head>

<body>
    <header>
        <?php require('includes/header.php'); ?>
    </header>

    <main>
    <div class="container">
        <div class="body-change">
            <div class="promfolder">
                <img class="prom" src="/../public/img/cupom.png" alt="Cupom FICAEMCASA">
            </div>

            <div class="row mx-lg-n5 ">
                <div class="col1pv" class=".col- py-3 px-lg-5 ">

                    <nav id="navbar-exemplo3 " class="navbar navbar-light ">
                        <div class="sidebar ">

                            <a class="categorybar nav-link">  &#x025B8; Produtos </a>
                            <nav class="nav nav-pills flex-column ">
                                <?php foreach ($categories as $category) : ?>
                                    <div>
                                        <form method="POST" action="/products/category">
                                            <input type="hidden" name="id" value="<?= $category->id ?>">
                                            <div>
                                                <button class="btn btn  button-categories" type="submit"><?= $category->name ?></button>
                                            </div>
                                        </form>
                                    </div>
                                <?php endforeach; ?>
                            </nav>

                        </div>
                    </nav>

                </div>

                <?php if ( empty( $products ) ) { ?>
                <div class="d-flex justify-content-center">
                    <h2 class="cat-none">Nenhum produto listado nesta categoria</h2>
                </div>
                <?php } else { ?>
                    <div class="col py-3 px-lg-5 ">
                        <div class="card-deck carddeckprdpg">
                            <div class="row ">
                                <?php foreach ($products as $product) : ?>    
                                    <div class="col">
                                        <div class="cardprdpg">
                                            <form  method="POST" action="/products/viewprod">
                                                <input type="hidden" name="id" value="<?= $product->id ?>">
                                                    <button class="btn btn-outline-light border-0 prod-buttons" type="submit" styles="border-radius: 900px;">
                                                        <img class="card-img-top rounded" src="/../../public/img/roupa3.jpeg" alt="<?= $product->name; ?>">
                                                    </button> 
                                            </form>
                                        
                                            <div class="card-body cardbodyprdpg">
                                                <h5 class="card-title cardtitleprdpg"><?= $product->name; ?></h5>
                                                <p class="card-text cardtxtprdpg"><?= $product->price; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>  
        </div>
    </div>
    </main>
    <footer>
        <?php require('includes/footer.php'); ?>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js "></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js " integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js " integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy " crossorigin="anonymous "></script>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js " integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49 " crossorigin="anonymous "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js " integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy " crossorigin="anonymous "></script>

</html>