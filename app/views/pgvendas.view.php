<!DOCTYPE html>

<html lang="pt-br">

<?php 

    if (!empty($products)){
        if (isset ($pagination)){
            $limit = 8;
            $prod_count = count($products);
            $numpage = ceil( $prod_count / $limit);
            $identification = array();
            foreach ($products as $product){
                array_push ($identification, $product->id);
            }
            $actuallypage = array_search ($pagination[0]->id, $identification);
            $nextpage = $actuallypage + $limit;
            if ($nextpage <= count($products)){
                $exist = 1;
            }
            else {
                $exist = 0;
            }
        }
    }
?>
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
            <div class="searchprod">
                <nav class="navbar navbar-light bg-transparent">
                    <form class="form-inline" method='POST' action='/search'>
                        <input name='search' style="width: 200px; text-align: center;" class="form-control mr-sm-2" type="search" placeholder="Faça sua pesquisa!" aria-label="Pesquisar">
                        <button style="width: 50px" class="btn btn-outline-black-50" type="submit">  &#8981  </button>
                    </form>
                </nav>
            </div>

            <div class="row mx-lg-n5 ">
                <div class="col1pv" class="col py-3 px-lg-5 ">

                    <nav id="navbar-exemplo3 " class="navbar navbar-light ">
                        <div class="sidebar ">

                            <a class="categorybar nav-link">  &#x025B8; Produtos </a>
                            <nav class="nav nav-pills flex-column ">
                                <?php foreach ($categories as $category) : ?>
                                    <div>
                                        <form method="POST" action="products/category">
                                            <input type="hidden" name="id" value="<?= $category->id ?>">
                                            <div>
                                                <button class="btn btn  button-categories" type="submit" style="font-size: 20px;" ><?= $category->name ?></button>
                                            </div>
                                        </form>
                                    </div>
                                <?php endforeach; ?>
                            </nav>

                        </div>
                    </nav>

                </div>

                <div class="col py-3 px-lg-5 d-flex justify-content-center products">

                    <div class="card-deck carddeckprdpg">
                        <div class="row ">
                            <?php if (isset($products) && !empty($products)) : ?>
                                <?php if (isset($pagination)) : ?>
                                    <?php foreach ($pagination as $product) : ?>    
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                            <div class="cardprdpg">
                                                <form  method="POST" action="/products/viewprod">
                                                    <input type="hidden" name="id" value="<?= $product->id ?>">
                                                        <button class="btn btn-outline-light border-0 prod-buttons" type="submit" styles="border-radius: 900px;">
                                                            <img class="card-img-top rounded" src="/../../public/img/<?= $product->image ?>" alt="<?= $product->name; ?>">
                                                        </button> 
                                                </form>
                                            
                                                <div class="card-body cardbodyprdpg">
                                                    <h5 class="card-title cardtitleprdpg"><?= $product->name; ?></h5>
                                                    <p class="card-text cardtxtprdpg"><?= $product->price; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>  
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
        </div>
        </div>
        <nav aria-label="Navegação de página exemplo">
            <ul class="pagprdpg pagination justify-content-end">
                <li class="page-item">
                    <form method="GET" action="/products/pag">
                        <?php if ($actuallypage == 0) : ?>
                            <input type="hidden" name="pag" value="<?= $actuallypage; ?>" />
                        <?php else : ?>
                            <input type="hidden" name="pag" value="<?= ($actuallypage - $limit); ?>" />
                            <button class="page-link" href="#" aria-label="Anterior">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Anterior</span>
                            </button>
                        <?php endif; ?>
                    </form>
                </li>

                <?php for ($i=1; $i <= $numpage; $i++) : ?>
                    <li class="page-item">
                        <form method="GET" action="/products/pag">
                            <input type="hidden" name="pag" value="<?= ($i*$limit)- $limit; ?>" />
                            <button type="submit" class="page-link"><?= $i ?></button>
                        </form>
                    </li>
                <?php endfor; ?>

                <li class="page-item">
                    <form method="GET" action="/products/pag">
                        <?php if ($exist == 1) : ?>
                            <input type="hidden" name="pag" value="<?= ($actuallypage + $limit); ?>" />
                            <button class="page-link" href="#" aria-label="Próximo">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Próximo</span>
                            </button>
                        <?php else : ?>
                            <input type="hidden" name="pag" value="<?= $actuallypage; ?>" />
                        <?php endif; ?>
                    </form>
                </li>
            </ul>
        </nav>

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