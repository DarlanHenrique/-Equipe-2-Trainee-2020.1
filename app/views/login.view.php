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
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="../../../public/css/reset.css">
    <link rel="stylesheet" href="../../../public/css/styles.css">


    <title>Da lã | Login</title>
  </head>
  <body class="text-center login-body">
    <header>
      <?php require __DIR__ . '/includes/header.php'; ?>
    </header>
  
    
    <main class="col-xl-4 offset-xl-4 col-lg-6 offset-lg-3 col-md-8 offset-md-2 login-main">
      <div class="card">
        <div class="card-body">
          <h1>Login Administrativo</h1>
          <form method="POST" action="/admin/login/check">
              <div class="form-group">
                <label class="login-label" for="exampleInputEmail1">Endereço de email</label>
                <input type="email" name="email" class="form-control login-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
              </div>
              <div class="form-group">
                <label class="login-label"for="exampleInputPassword1">Senha</label>
                <input type="password" name="password" class="form-control login-input" id="exampleInputPassword1" placeholder="Senha">
              </div>
                <div class="form-group form-check">
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
    </main>

    <footer>
      <?php require __DIR__ . '/includes/footer.php'; ?>    
    </footer>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>