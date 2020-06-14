<?php require('partials/head.php'); ?>



<h1>Submit Your Name</h1>

<form method="POST" action="/users">
	<div class="form-group col-sm-12 text-category">
		<label for="username" >Nome:</label>
		<input type="text" name="username" class="form-control" required ="required" placeholder="Nome de usuário">
	</div>
	<div class="form-group col-sm-12 text-category">
		<label for="email">Numero de Peças:</label>
		<input type="text" class="form-control" required ="required" name="email"  placeholder="Endereço de email">
	</div>
	<div class="form-group col-sm-12 text-category">
		<label for="password">Senha:</label>
		<input type="text" class="form-control" required ="required" name="password"  placeholder="Senha">
	</div>
		<button type="submit" name="btn" class="btn btn-success button-actions button-action-view" >Cadastrar</button>
		<a href="/admin/usuarios" class="btn btn-warning button-actions button-action-edit"> Voltar </a>
</form>

<?php require('partials/footer.php'); ?>
