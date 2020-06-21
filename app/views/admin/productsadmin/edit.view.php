<!DOCTYPE html>

<html lang="pt-br">

<head>

<!-- Links Bootstrap -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">

<!-- Links css -->
<link rel="stylesheet" href="../../public/css/styles.css">
<link rel="stylesheet" href="../../public/css/reset.css">
<link rel="stylesheet" href="../../../public/css/bootstrap.min.css">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

<!-- Info site -->
<meta charset="utf-8">
<title>Da Lã | Lista de Produtos</title>
<link rel="sortcut icon" href="../../../public/img/Da_lã_Logo_2.png" type="image/x-icon">

<meta name="description" content="O melhor da moda infantil você encontra aqui na Da Lã, loja online de roupas infantis.">

</head>

<body>

<main class="font-user prod">

    <div  class="title-prod">
        <h1>Produto <?= '#' . $product->id; ?></h1>
    </div>

    <div class=" text-center">
		  	
		    	<div class="col-sm-12 col-lg-12 ">
                    
                    <form method="POST" action="/admin/products/create">
                    
                    <div class="form-group col-sm-12 text-category">
		    				<label for="name" >Novo Nome:</label>
                            <input type="text" name="name" class="form-control" required id="name"  placeholder="<?= $product->name; ?>">
		  			</div>
                    
                    <div class="form-group col-sm-12 text-category">
		    				<label for="price">Novo Preço:</label>
		    				<input type="text" name="price" class="form-control" required id="price" placeholder="<?= $product->price; ?>">
                    </div>

                    <div class="form-group col-sm-12 text-category">
		    				<label for="category">Nova Categoria:</label>
		    				<input type="text" name="category" class="form-control" required id="category" placeholder="<?= $product->category; ?>">
                    </div>

                    <div class="form-group col-sm-12 text-category">
		    				<label for="details">Novos Detalhes:</label>
		    				<input type="text" name="details" class="form-control" required id="details" placeholder="<?= $product->details; ?>">
                    </div>
                          
                    <div class="form-group col-sm-12 text-category">
		    				<label for="description">Nova Descrição:</label>
		    				<input type="text" name="description" class="form-control" required id="description" placeholder="<?= $product->description; ?>">
                    </div>

                    <br>
                    <button type="submit" name="btn" class="btn btn-success button-actions button-action-view" >Adicionar</button>
		    				<a href="/admin/products" class="btn btn-warning button-actions button-action-edit"> Voltar </a>
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
