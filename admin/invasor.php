<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Refresh" content="15;URL=../index.php">
    <title>Invasor</title>
    <script src="https://kit.fontawesome.com/2495680ceb.js" crossorigin="anonymous"></script>
    <!-- Link CSS do Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Link para CSS Específico -->
    <link rel="stylesheet" href="../css/meu_estilo.css">

</head>
<body   class="fundofixo">
<main class="container">
    <div class="row">
          <div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4" >
                  <h2 class="breadcrumb text-danger  text-center">Atençao! </h2>
               <div class="thumbnail text-center">
                <span class="fa-stack fa-7x">
                    <i class="fas fa-user-secret fa-stack-1x"></i>
                    <i class="fas fa-ban fa-stack-2x text-danger"></i>
                </span>
                <br><br>
                <div class="alert alert-danger" role="alert">
                    <h4>
                        <i class="fas fa-spinner fa-pulse fa-lg"></i>
                        Usuario e/ou Senha Invalido
                    </h4>
                    <p class="text-danger">
                        <a href="login.php" class="btn btn-danger">
                               <i class="fas fa-external-link-alt fa-rotate-270 fa-3x"></i>
                               <br><br>
                               Tenter <br> Novamente
                        </a>
                         <a href="../index.php" class="btn btn-success">
                               <i class="fas fa-home fa-3x"></i>
                               <br><br>
                               Voltar <br> Area Publica
                        </a>
                    </p>
                    <p>
                        <small>
                            <br>
                            Caso não faça uma escolha em 15segundos será redirecionado automaticamento para pagina inicial
                        </small>
                    </p>
                </div>
               </div>
        </div><!--dimensionamento-->
    </div> <!--fecha row -->
</main>
    




    <!-- Link arquivos Bootstrap js --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>