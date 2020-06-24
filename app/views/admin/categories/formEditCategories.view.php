
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">

  	<title>Da Lã | Roupas Infantis</title>

  	<meta name="description" content="O melhor da moda infantil você encontra aqui na Da Lã, loja online de roupas infantis.">
  	<link rel="stylesheet" href="/public/css/reset.css">
  	<link rel="stylesheet" href="/../public/css/styles.css">
  	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
  	<link rel="sortcut icon" href="/../public/img/Da_lã_Logo_2.png" type="image/x-icon">
</head>
<body>
	<main>
		<div class=" text-center">
		  	<div class="card-body font-user ">
		  		<h1 class="title-user">Nova Categoria</h1>
		  		<div class="col-sm flex-center text-center card-title">
		    	    <img src="/../../public/img/Da_lã_Logo_2.png" width="135" height="90" alt="Logotipo Da Lã">
		    	</div>
		    	<div class="col-sm-12 col-lg-12 ">
				<?php 
				var_dump($category); ?>
                    <form name="formAddCategory" action="/admin/categorias" onsubmit="MudaDePagina()" method="POST">
						<div class="form-group col-sm-12 text-category">
		    				<label for="name" >Nome:</label>
		    				<input type="text" name="name" value="<?= $category->name ?>" class="form-control" id="name"  placeholder="Nome da Categoria">
		  				</div>
						  <div class="form-group col-sm-12 text-category">
		    				<label for="amount">Numero de Peças:</label>
		    				<input type="text" class="form-control" id="amount" value="<?= $category->amount ?>" name="amount" placeholder="Numero de Peças">
		  				</div>
						<div class="form-group col-sm-12 text-category">
		    				<label for="gender">Gênero:</label>
		    				<input type="text" class="form-control" name="gender" value="<?= $category->gender ?>" id="gender" placeholder="Gênero">
		  				</div>
							<button type="submit" name="btn" class="btn btn-success button-actions button-action-view">Atualizar</button>
		    				<a href="/admin/categorias" class="btn btn-warning button-actions button-action-edit">Voltar</a>
		    		</form>
				</div>
			</div>
		</div>
	</main>	
</body>
<script>
	/*function MudaDePagina() {
		alert ("Categoria Criada");
      	window.setTimeout("location.href = '/admin/categorias'");

    }*/
</script>
</html>