
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
  	<link rel="stylesheet" href="/../../../../public/css/reset.css">
  	<link rel="stylesheet" href="/../../../../public/css/styles.css">
  	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
  	<link rel="sortcut icon" href="/../../../../public/img/Da_lã_Logo_2.png" type="image/x-icon">
</head>
<body>
	<main>
		<div class=" text-center prod">
		  	<div class="card-body font-user ">
		  		<h1 class="title-user">Editar Produto #<?= $product->id ?> </h1>
		  		<div class="col-sm flex-center text-center card-title">
		    	    <img src="/../../public/img/Da_lã_Logo_2.png" width="135" height="90" alt="Logotipo Da Lã">
		    	</div>
		    	<div class="col-sm-12 col-lg-12 edit-table">
                    <form name="formAddProducts" action="/admin/productsadmin/products/edit" onsubmit="MudaDePagina()" method="POST">
						
						<div class="form-group col-sm-12 text-products edit-form">
		    				<label for="name" > Nome:</label>
		    				<input type="text" name="name" value="<?= $product->name ?>" class="form-control" id="name"  placeholder="Nome do produto">
		  				</div>

						<div class="form-group col-sm-12 text-products edit-form">
		    				<label for="name" > Preço:</label>
		    				<input type="text" name="price" value="<?= $product->price; ?>" class="form-control" id="price"  placeholder="Preço do produto">
		  				</div>

						<div class="form-group col-sm-12 text-products edit-form">
							<label for="name" >Genêro:</label>
							<?php if($product->gender == "1") : ?>
								<select class="form-control" name="gender" required ="required" id="gender">
									<option disabled>Selecione um Genêro</option>
									<option value="1" selected="selected" name ="gender">Masculino</option>
									<option value="2" name="gender">Feminino</option>
									<option value="3" name="gender">Unissex</option>
								</select>
							
							<?php elseif($product->gender == "2") : ?>
							<select class="form-control" name="gender" required ="required" id="gender">
								<option disabled>Selecione um Genêro</option>
								<option value="1" name ="gender">Masculino</option>
								<option value="2" selected="selected" name="gender">Feminino</option>
								<option value="3" name="gender">Unissex</option>
							</select>

							<?php elseif($product->gender == "3") : ?>
							<select class="form-control" name="gender" required ="required" id="gender">
								<option disabled>Selecione um Genêro</option>
								<option value="1" name ="gender">Masculino</option>
								<option value="2" name="gender">Feminino</option>
								<option value="3" selected="selected" name="gender">Unissex</option>
							</select>

							<?php endif ?>
						</div>

						<div class="form-group col-sm-12 text-products edit-form">
							<label for="name" >Categoria:</label>
								<select class="form-control" name="categories" required ="required" id="categories">
										<option disabled>Selecione uma Categoria</option>
									<?php foreach ($categories as $category) : ?>
										<option value="<?= $category->id ?>" name="categories"> <?= $category->name ?> </option>
									<?php endforeach ?>
								</select>
						</div>
	
						<div class="form-group col-sm-12 text-products edit-form">
		    				<label for="name" > Detalhes:</label>
		    				<input type="text" name="details" value="<?= $product->details; ?>" class="form-control" id="details"  placeholder="Detalhes do produto">
		  				</div>

						<div class="form-group col-sm-12 text-products edit-form">
		    				<label for="name" > Descrição:</label>
		    				<input type="text" name="description" value="<?= $product->description; ?>" class="form-control" id="description"  placeholder="NomDescrição do produto">
		  				</div>

						<div class="form-group col-sm-12 image-edit">
							<form action="admin/productsadmin/products/edit" method="POST" enctype="multipart/form-data">
								<label for="name" >Imagem do Produto</label>
								<br>
								<input type="file"  required  name="image">
								
								<br>
								<div class="buttons-back">
									<input type="hidden" name="id" value="<?= $product->id ?>">
									<button type="submit" name="btn" class="btn btn-success button-actions button-action-view">Atualizar</button>
									<a href="/admin/productsadmin/products" class="btn btn-warning button-actions button-action-edit">Voltar</a>
								</div>
							</form>
						</div>
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