<?php require __DIR__ . '/../../partials/head.php'; ?>

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
            <table class="table table-striped table-bordered table-responsive-md-1 table-responsive-sm-5 table-user">
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


<?php require __DIR__ . '/../../partials/footer.php'; ?>