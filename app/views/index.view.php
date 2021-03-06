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
    <link rel="stylesheet" href="../public/css/reset.css">
    <link rel="stylesheet" href="../public/css/styles.css">

    <title>Da lã | Roupas Infantis</title>
      <meta name="description" content ="O melhor da moda infantil você encontra aqui na Da Lã, loja online de roupas infantis.">


    <title> Da Lã | Roupas Infantis</title>
  </head>

  <body>

  <?php include('includes/header.php'); ?>


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
                    <img class="card-img-top" src="/../../public/img/<?= $product->image ?>" alt="<?= $product->name; ?>">
                    <div class="card-body">
                      <h5 class="card-title product-name"><?= $product->name; ?></h5>
                      <form  method="POST" action="/products/viewprod">
                          <input type="hidden" name="id" value="<?= $product->id ?>">
                              <button class="btn btn-outline-warning home-button col-sm-10" type="submit" styles="border-radius: 900px;">
                                  <a>Ver detalhes</a>
                              </button> 
                      </form>

                    </div>
                  </div>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>

            <a href="/products" class="btn btn-outline-warning more col-sm-10">Ver mais produtos &#10140;</a>
        </div>
      </div>
    </main>

    <footer>
      <?php include('includes/footer.php'); ?>
    </footer>  


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


