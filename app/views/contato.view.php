<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
        <!--Fontes-->
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">  
        <!-- Css cabeçalho/Footer-->
        <link rel="stylesheet" href="/../public/css/reset.css">
        <link rel="stylesheet" href="/../public/css/style.css">
        <!--Css personalizado-->
        <link rel="stylesheet" href="/../public/css/styles.css">
        <link rel="sortcut icon" href="/../public/img/Da_lã_Logo_2.png" type="image/x-icon">
        <title>Contato</title>
        <meta name="description" content ="O melhor da moda infantil você encontra aqui na Da Lã, loja online de roupas infantis.">
    </head>
    <body>
        <!-- Inicio Header-->
        <header>
            <?php require('includes/header.php'); ?>
        </header>
        <!-- Final Header-->
        <main class="font-contact">
            <div class="container mt-5 mb-5">
                <div>
                    <h1 class="title-contact">Entre em Contato</h1>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <form action="">
                            <div class="form-group col-sm-12">
                                <label for="Nome" class="font-contact label-contact">Nome:</label>
                                <input type="text" class="form-control" autofocus required ="required" name="nome" id="nome" placeholder="Informe seu nome">
                            </div>
                        
                            <div class="form-group col-sm-12">
                                <label for="Telefone" class="font-contact label-contact">Telefone:</label>
                                <input type="text" class="form-control telefone" name="telefone" required ="required" maxlength="15" id="telefone" placeholder="(99) 9 9999-9999">
                            </div>
                        
                            <div class="form-group col-sm-12">
                                <label for="Email" class="font-contact label-contact" >E-mail:</label>
                                <input type="email" class="form-control" required ="required" name="email" id="email" placeholder="nome@exemplo.com">
                            </div>
                        
                            <div class="form-group col-sm-12">
                                <label for="FormControlAssunto" class="font-contact label-contact" >Assunto:</label>
                                <input type="text" class="form-control" required ="required" name="assunto" id="assunto" placeholder="Assunto">
                            </div>
                        
                            <div class="form-group col-sm-12">
                                <label for="Textarea" class="font-contact label-contact" >Mensagem:</label>
                                <textarea class="form-control mb-2"  style="resize:none;" name="textarea" id="textarea" required ="required"rows="3" placeholder="Digite sua mensagem aqui."></textarea>
                            </div>
                        
                            <div class="col-sm-6 col-sm-offset-3">
                                <button type="submit" name="con-enviar" id="con-enviar" class="btn btn-outline-warning button-contact btn-sm">
                                    <span class="font-contact">Enviar mensagem</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-sm-12 map">
                        <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29642.271456992898!2d-43.37174002049676!3d-21.76926947850989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989b9e2bea807b%3A0x7ac85ca76e3d3d1d!2sCode%20Jr.!5e0!3m2!1spt-BR!2sbr!4v1580241016764!5m2!1spt-BR!2sbr" width="100%" height="91.5%" frameborder="0" allowfullscreen="allowfullscreen" style="border: 0px;"></iframe>
                    </div> 
                </div>
            </div>
        </main>
        <!--Inicio Footer-->
        <footer>
            <?php require('includes/footer.php'); ?>
        </footer>
        <!--Final Footer-->
    
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

        <!-- Mascara input Telefone -->
        <script src="/../public/js/mascaraTel.js"></script>
    </body>
</html>
