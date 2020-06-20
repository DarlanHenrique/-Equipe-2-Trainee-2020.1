<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">


    <title>Da Lã | Produtos</title>
    <meta name="description" content="O melhor da moda infantil você encontra aqui na Da Lã, loja online de roupas infantis.">

    <link rel="stylesheet" href="/../public/css/reset.css">
    <link rel="stylesheet" href="/../public/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

    <link rel="sortcut icon" href="/../public/img/Da_lã_Logo_2.png" type="image/x-icon">
</head>

<body>
    <header>
      <?php require('NavBar-Footer/html/header.php'); ?>
    </header>

<div class="body-change">

    <main>
        <div class="container">
            <div class="promfolder">
                <img class="prom" src="/../public/img/cupom.png" alt="Cupom FICAEMCASA">
            </div>
            <div class="searchprod">
                <nav class="navbar navbar-light bg-transparent">
                    <form class="form-inline">
                        <input style="width: 200px; text-align: center;" class="form-control mr-sm-2" type="search" placeholder="Faça sua pesquisa!" aria-label="Pesquisar">
                        <button style="width: 50px" class="btn btn-outline-black-50" type="submit">  &#8981  </button>
                    </form>
                </nav>
            </div>

            <div class="row mx-lg-n5 ">
                <div class="col1pv" class=".col- py-3 px-lg-5 ">

                    <nav id="navbar-exemplo3 " class="navbar navbar-light ">
                        <div class="sidebar ">
                            <a class="nav-link text-dark" href="#item-1 ">  &#x025B8; Feminino </a>
                            <nav class="nav nav-pills flex-column ">
                                <a class="nav-link text-dark ml-3 my-1 " href="#item-1-1 ">Blusas</a>
                                <a class="nav-link text-dark ml-3 my-1 " href="#item-1-2 ">Bodies</a>
                                <a class="nav-link text-dark ml-3 my-1 " href="#item-1-3 ">Calças</a>
                                <a class="nav-link text-dark ml-3 my-1 " href="#item-1-3 ">Saias</a>
                                <a class="nav-link text-dark ml-3 my-1 " href="#item-1-4 ">Macacões</a>
                                <a class="nav-link text-dark ml-3 my-1 " href="#item-1-4 ">Vestidos</a>
                                <a class="nav-link text-dark ml-3 my-1 " href="#item-1-5 ">Conjuntos</a>
                                <a class="nav-link text-dark ml-3 my-1 " href="#item-1-6 ">Pijamas</a>
                            </nav>
                            <br>
                            <a class="nav-link text-dark " href="#item-2 "> &#x025B8; Masculino</a>
                            <nav class="nav nav-pills flex-column ">
                                <a class="nav-link text-dark ml-3 my-1 " href="#item-2-1 ">Blusas</a>
                                <a class="nav-link text-dark ml-3 my-1 " href="#item-2-2 ">Bodies</a>
                                <a class="nav-link text-dark ml-3 my-1 " href="#item-2-3 ">Calças</a>
                                <a class="nav-link text-dark ml-3 my-1 " href="#item-2-3 ">Bermudas</a>
                                <a class="nav-link text-dark ml-3 my-1 " href="#item-2-4 ">Macacões</a>
                                <a class="nav-link text-dark ml-3 my-1 " href="#item-2-5 ">Conjuntos</a>
                                <a class="nav-link text-dark ml-3 my-1 " href="#item-2-6 ">Pijamas</a>
                            </nav>

                        </div>
                    </nav>

                </div>

                <div class="col py-3 px-lg-5 ">
                    <div class="card-deck carddeckprdpg">
                        <div class="row ">
                            <?php foreach ($products as $product) : ?>    
                                <div class="col">
                                    <div class=" cardprdpg">
                                        <form class="cell_buttons" method="POST" action="produtos/viewprod">
                                            <input type="hidden" name="id" value="<?= $product->id ?>">
                                            <a href="produtos/viewprod">
                                            <img class="card-img-top cardimgprdpg rounded" src="/../public/img/roupa1.jpeg" alt="Imagem de capa do card ">
                                            </a>
                                        
                                            <div class="card-body cardbodyprdpg">
                                                <h5 class="card-title cardtitleprdpg"><a href="#"><?= $product->name; ?></a></h5>
                                                <p class="card-text cardtxtpr"><?= $product->price; ?></p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            <?php endforeach; ?>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
      <?php require('NavBar-Footer/html/footer.php'); ?>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js "></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js " integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js " integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy " crossorigin="anonymous "></script>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js " integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49 " crossorigin="anonymous "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js " integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy " crossorigin="anonymous "></script>

</html>