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

<main>
		<div class=" text-center">
		  	<div class="card-body font-user ">
		  		<h1 class="title-user">Adicionar Produto</h1>
		  		<div class="col-sm flex-center text-center card-title">
		    	    <img src="/../../public/img/Da_lã_Logo_2.png" width="135" height="90" alt="Logotipo Da Lã">
		    	</div>
		    	<div class="col-sm-12 col-lg-12 ">
                    
                    <form method="POST" action="/admin/products/create">
                    
						<div class="form-group col-sm-12 text-category">
								<label for="name" >Nome do Produto</label>
								<input type="text" name="name" class="form-control" required id="name"  placeholder="Insira o Nome">
						</div>
						
						<div class="form-group col-sm-12 text-category">
								<label for="price">Preço do Produto:</label>
								<input type="text" name="price" class="form-control" required id="price" placeholder="Insira o Preço">
						</div>

						<div class="form-group col-sm-12 text-category">
								<label for="category">Categoria do Produto:</label>
								<input type="text" name="category" class="form-control" required id="category" placeholder="Insira a Categoria">
						</div>

						<div class="form-group col-sm-12 text-category">
								<label for="details">Detalhes do Produto:</label>
								<input type="text" name="details" class="form-control" required id="details" placeholder="Insira os Detalhes">
						</div>
							
						<div class="form-group col-sm-12 text-category">
								<label for="description">Descrição do Produto:</label>
								<input type="text" name="description" class="form-control" required id="description" placeholder="Insira a Descrição">
						</div>

						<div class="form-group col-sm-12 text-category">
								<form action="/admin/products/create" method="POST" enctype="multipart/form-data">
									<label for="name" >Imagem do Produto</label>
									<input type="file" required name="image">
									
									<button type="submit" name="btn" class="btn btn-success button-actions button-action-view" >Adicionar</button>
									<a href="/admin/products" class="btn btn-warning button-actions button-action-edit"> Voltar </a>
								</form>
						</div>
		    		</form>
				</div>
			</div>
		</div>
</main>

<script src="../../../public/js/jquery-3.5.1.slim.min.js" ></script>
<script src="../../../public/js/popper.min.js"></script>
<script src="../../../public/js/bootstrap.min.js" ></script>	
	
</body>

<!-- Links Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js " integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49 " crossorigin="anonymous "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js " integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy " crossorigin="anonymous "></script>

</html>

 

