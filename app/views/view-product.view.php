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

            <nav class="navbar navbar-light bg-transparent">
                <form class="form-inline" method='POST' action='/search'>
                    <input style="width: 200px; text-align: center;" class="form-control mr-sm-2" type="search" placeholder="Faça sua pesquisa!" aria-label="Pesquisar">
                    <button style="width: 50px" class="btn btn-outline-black-50 my-sm-0" type="submit">  &#8981  </button>
                </form>
            </nav>

            <div class="row mx-lg-n5 ">
                <div class="col col1prdpg" class="col-2 py-0 px-0 ">

                    <nav id="navbar-exemplo3 " class="navbar navbar-light ">
                        <div class="sidebar-view ">

                            <a class="nav-link text-dark" href="#item-1 ">  &#x025B8; Produtos </a>
                            <nav class="navbar navbar-light bg-transparent">
                                <?php foreach ($categories as $category) : ?>
                                    <div>
                                        <form method="POST" action="/products/category">
                                            <input type="hidden" name="id" value="<?= $category->id ?>">
                                            <div class="font-buttons">
                                                <button class="btn btn  button-categories" type="submit" style="font-size: 20px;"><?= $category->name ?></button>
                                            </div>
                                        </form>
                                    </div>
                                <?php endforeach; ?>
                            </nav>

                        </div>
                    </nav>

                </div>

                <div class="col-8 py-0 px-lg-0 ">
                    <div class="carddeckprdpg">
                        <div class="card-deck">
                            <div class="row ">

                                <div class="col col2prdpg ">
                                    <div class="cardprdpg ">
                                        <img class="card-img-top cardimgprdpg d-flex justify-content-center" src="/../../public/img/<?= $product->image ?>" alt="<?= $product->name; ?>">
                                    </div>
                                </div>

                                <div class="col col3prdpg ">
                                    <div class="card border-dark mb-3 " style="max-width: 18rem;">
                                        <div class="cardbodyprdpg">
                                            <div class="card-header bg-transparent border-dark cardtitleprdpg"><?= $product->name; ?></div>
                                            <div class="card-body text-dark">
                                                <p class="card-text cardtxtprdpg" style=" line-height: 32px ;"><?= $product->price; ?><p>
                                                <p class="card-text cardtxtprdpg" style=" line-height: 32px ;">
                                                <?php if ($product->gender == "1") : ?>
                                                    Masculino

                                                <?php elseif ($product->gender == "2") : ?>
                                                    Feminino

                                                <?php elseif ($product->gender == "3") : ?>
                                                    Unissex
                                                
                                                <?php endif; ?>
                                                <p>
                                                <p class="card-text cardtxtprdpg" style=" line-height: 32px ;"><?= $product->description; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="card border-dark mb-3 " style="max-width: 18rem;">
                                    <div class="cardbodyprdpg">
                                        <div class="card-body text-dark ">
                                            <p class="card-text cardtxtprdpg"><?= $product->details; ?><p>
                                        </div>
                                    </div>
                    </div>
                </div>

            </div>

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