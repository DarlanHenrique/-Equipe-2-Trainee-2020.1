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
  <link rel="stylesheet" href="/../../public/css/reset.css">
  <link rel="stylesheet" href="/../../public/css/styles.css">
  <link rel="stylesheet" href="/../../public/css/style.css">
  
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
  <link rel="sortcut icon" href="/../public/img/Da_lã_Logo_2.png" type="image/x-icon">

</head>

<body>
  <main class="font-user main-user">
    <div class="container mt-5">
      <nav>
        <div>
          <a class="back-menu" title="Menu" href="/admin"><i class="fas fa-angle-left"></i> Voltar ao Menu</a>
        </div>
      </nav>
      <div class="col-sm flex-center text-center">
        <img src="/../../public/img/Da_lã_Logo_2.png" width="135" height="90" alt="Logotipo Da Lã">
      </div>
      <div  class="title-user">
        <h1>Listagem de Usuários</h1>
      </div>
      <div class="row" >
        <div class="col-sm-12 col-lg-12">
          <div> 
            <a href="#" title="Adicionar" class="btn btn-primary button-add btn-sm" ><i class="fas fa-plus"></i> Adicionar</a>
          </div>
          <table class="table table-striped table-bordered table-user table-responsive-md-1 table-responsive-sm-5">
            <thead class="thead-dark">
              <tr>
                <th scope="col">N°</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Senha</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
            
              <tr>
              <?php foreach($users as $user) : ?>
                <td><?= $user->id; ?></td>
                <td><?= $user->nome; ?></td>
                <td><?= $user->email; ?></td>
                <td><?= $user->senha; ?></td>
              <?php endforeach; ?>
                <td>
                  <div>
                    <a href="#" title="Visualizar" class="btn btn-success button-actions button-action-view"><i  class="fas fa-eye"></i></a>
                    <a href="#" title="Editar" class="btn btn-warning button-actions button-action-edit"><i  class="fas fa-pen"></i></a>
                    <a href="#" title="Excluir" class="btn btn-danger button-actions button-action-delete"><i class="fas fa-trash"></i></a>
                  </div>
                </td>
              </tr>
            
              <tr>
                <td>2</td>
                <td>Lorem Ipsun</td>
                <td>Lorem Ipsun</td>
                <td>Lorem Ipsun</td>
                <td>
                  <div>
                    <a href="#" title="Visualizar" class="btn btn-success button-actions button-action-view"><i  class="fas fa-eye"></i></a>
                    <a href="#" title="Editar" class="btn btn-warning button-actions button-action-edit"><i  class="fas fa-pen"></i></a>
                    <a href="#" title="Excluir" class="btn btn-danger button-actions button-action-delete"><i class="fas fa-trash"></i></a>
                  </div>
                </td>
              </tr>
            
              <tr>
                <td>3</td>
                <td>Lorem Ipsun</td>
                <td>Lorem Ipsun</td>
                <td>Lorem Ipsun</td>
                <td>
                  <div>
                    <a href="#" title="Visualizar" class="btn btn-success button-actions button-action-view"><i  class="fas fa-eye"></i></a>
                    <a href="#" title="Editar" class="btn btn-warning button-actions button-action-edit"><i  class="fas fa-pen"></i></a>
                    <a href="#" title="Excluir" class="btn btn-danger button-actions button-action-delete"><i class="fas fa-trash"></i></a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
  </main>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js " integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49 " crossorigin="anonymous "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js " integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy " crossorigin="anonymous "></script>
</html>