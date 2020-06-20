<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
    <!--Fontes-->
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="../../public/css/reset.css">
    <link rel="stylesheet" href="../../public/css/styles.css">
    <link rel="stylesheet" href="../../public/css/style.css">

    <title>Da lã | Roupas Infantis</title>
      <meta name="description" content ="O melhor da moda infantil você encontra aqui na Da Lã, loja online de roupas infantis.">


    <title> Da Lã | Roupas Infantis</title>
  </head>

  <body>

  <header>
      <nav class="navbar navbar-expand-lg navbar-light header-directrix">
        <div class="container container-header">
          <a class="navbar-brand" href="#" alt="Logotipo da Da Lã">
            <img class="logo" src="../../public/img/Da_lã_Logo_2.png" width="90" height="60" class="d-inline-block align-top" alt="Logotipo Da Lã." >
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-center" id="navbarSite">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">Início<span class="sr-only">(Página atual)</span></a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Quem somos</a>
                </li>
            </ul>
          </div>      
          <form class="form-inline search">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar..." aria-label="Pesquisar">
            <button type="submit" class="btn btn-outline-dark">&#8981</button>
          </form>
        </div>            
      </nav>

      <img class="banner-header" src="../../public/img/cabecalho.png" alt="Banner do Site">
    </header>


    <main>

      <div class="home-main" align="center">

        <img class="side-clouds float-right col-2" src="../../public/img/clouds-right.png">
        <img class="side-clouds float-left col-2" src="../../public/img/clouds-left.png">

        <div id="carouselExampleIndicators" class="carousel slide home-carousel col-xl-8 col-lg-8 col-md-9 col-sm-12 p-0 mt-xl-50" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="../../public/img/carousel1.jpg" alt="Dois meninos e duas meninas">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../../public/img/carousel2.jpg" alt="Duas meninas e dois meninos">
            </div>
            <div class="carousel-item item-carrossel">
              <img class="d-block w-100" src="../../public/img/carousel3.jpg" alt="Uma menina e um menino">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>

        <div class="latest-products col-xl-8 col-lg-8 col-md-9 col-sm-9">

          <h1>Nossos últimos produtos:</h1>

          <ul>
            <?php foreach ($products as $product) : ?>
              <li class="d-inline-block">
                <div class="p-0">
                  <div class="card product">
                    <img class="card-img-top" src="<?= $product->image; ?>" alt="<?= $product->name; ?>">
                    <div class="card-body">
                      <h5 class="card-title product-name"><?= $product->name; ?></h5>
                      <a href="#" class="btn btn-outline-warning home-button col-sm-10">Ver detalhes</a>
                    </div>
                  </div>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>

            <a href="pgvendas.html" class="btn btn-outline-warning more col-sm-10">Ver mais produtos &#10140;</a>
        </div>
      </div>
    </main>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm"></div>
          <div class="col-sm flex-center text-center meio">
            <img src="../../public/img/Da_lã_Logo_2.png" width="90" height="60" alt="Logotipo Da Lã">
            <p class="copyright">&copy; copyright - 2020 - Da Lã comércio eletrônico - LTDA </p>
          </div>
          <div class="col-sm col align-self-center flex-center text-center final">
            
            <p>Acompanhe nossas mídias sociais e fique por dentro das novidades!</p>
            <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/DarlanHenrique/-Equipe-2-Trainee-2020.1"><i class="fab fa-github"></i></a>
            
          </div>
        </div>
      </div>  
    </footer>  


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


