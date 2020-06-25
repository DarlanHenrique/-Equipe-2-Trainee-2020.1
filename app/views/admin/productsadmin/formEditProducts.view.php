
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
		    				<label for="name" > Genêro:</label>
		    				<input type="text" name="gender" value="<?= $product->gender; ?>" class="form-control" id="gender"  placeholder="Genêro do produto">
		  				</div>

						<div class="form-group col-sm-12 text-products edit-form">
		    				<label for="name" > Categoria:</label>
		    				<input type="text" name="category" value="<?= $product->category; ?>" class="form-control" id="category"  placeholder="Categoria do produto">
						</div>
	
						<div class="form-group col-sm-12 text-products edit-form">
		    				<label for="name" > Detalhes:</label>
		    				<input type="text" name="details" value="<?= $product->details; ?>" class="form-control" id="details"  placeholder="Detalhes do produto">
		  				</div>

						<div class="form-group col-sm-12 text-products edit-form">
		    				<label for="name" > Descrição:</label>
		    				<input type="text" name="description" value="<?= $product->description; ?>" class="form-control" id="description"  placeholder="NomDescrição do produto">
		  				</div>

						<input type="hidden" name="id" value="<?= $product->id ?>">
						<button type="submit" name="btn" class="btn btn-success button-actions button-action-view">Atualizar</button>
		    			<a href="/admin/productsadmin/products" class="btn btn-warning button-actions button-action-edit">Voltar</a>
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