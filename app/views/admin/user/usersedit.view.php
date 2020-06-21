<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">

<link rel="stylesheet" href="../../public/css/styles.css">
<link rel="stylesheet" href="../../public/css/reset.css">
<link rel="stylesheet" href="../../../public/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

<meta charset="utf-8">
<title>Da Lã | Lista de Usúarios</title>
<link rel="sortcut icon" href="../img/Da_lã_Logo_2.png" type="image/x-icon">

<meta name="description" content="O melhor da moda infantil você encontra aqui na Da Lã, loja online de roupas infantis.">

</head>

<body>
    <main class="font-user">
        <div class="container mt-5">
        <nav>
            <div>
            <a class="back-menu" title="Menu" href="#"><i class="fas fa-angle-left"></i> Voltar ao Menu</a>
            </div>
        </nav>
        <div class="col-sm flex-center text-center">
            <img src="../public/img/Da_lã_Logo_2.png" width="135" height="90" alt="Logotipo Da Lã">
        </div>
        <div  class="title-user">
            <h1>Visualização de Usuários</h1>
        </div>
        <div class="row" >
            <div class="col-sm-12 col-lg-12">
            <div> 
                <a href="#" title="Adicionar" class="btn btn-primary button-add btn-sm" ><i class="fas fa-plus"></i> Adicionar</a>
            </div>
            <table class="table table-striped table-bordered table-responsive-md-1 table-responsive-sm-5">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ações</th>
                    <th scope="col">Senha</th>
                </tr>
                </thead>
                <tbody>                
                        <tr>
                            <td><?= '#' . $user->id; ?></td>
                            <td><?= $user->username; ?></td>
                            <td><?= $user->email; ?></td>
                            <td><?= $user->password; ?></td>
                            <td>
                            <div>
                                <form class="cell_buttons" method="POST" action="/user/show">
                                    <input type="hidden" name="id" value="<?= $user->id ?>">
                                    <button class="btn btn-success button-actions button-action-view"><span class="fas fa-eye"></span></button>
                                </form>

                                <form class="cell_buttons" method="POST" action="/user/edit">
                                    <input type="hidden" name="id" value="<?= $user->id ?>">
                                    <button class="btn btn-warning button-actions button-action-edit"><span class="fas fa-pen"></span></button>
                                </form>

                                <form class="cell_buttons" method="POST" action="/user/delete">
                                    <input type="hidden" name="id" value="<?= $user->id ?>">
                                    <button class="btn btn-danger button-actions button-action-delete"><span class="fas fa-trash"></span></button>
                                </form>
                            </div>
                            </td>
                        </tr>
                </tbody>
            </table>
            </div>
        </div>
    </main>
</body>


