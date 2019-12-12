<?php
   require "../../../vendor/autoload.php";
   $controller = new App\Mvc\Controller();
   $controller->criaUsuario();
?>

<html>
   <head>
      <title>Painel Administrativo - Biblioteca</title>
      <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
   </head>
   <body>
      <div class="container">
         <h1>Adicionar livro</h1>
         <a href="Visualizar.php" class="btn btn-primary">Voltar</a>


         <form method="POST">
            <div class="form-group">
               <strong>Nome:</strong>
               <input type="text" name="nome" class="form-control" placeholder="Nome" required>
            </div>
            <div class="form-group">
               <strong>Informações:</strong>
               <textarea class="form-control" name="informacoes" placeholder="Nome" placeholder="Detail" required></textarea>
            </div>
            <div class="form-group">
               <strong>Autor:</strong>
               <input type="text" name="autor" class="form-control" placeholder="Autor" required>
            </div>
            <div class="form-group">
               <strong>Ano de lançamento:</strong>
               <input type="text" name="lancamento" class="form-control" placeholder="Lancamento" required>
            </div>
            <div class="form-group">
               <button type="submit" name="submit" class="btn btn-success" required>Enviar</button>
            </div>
         </form>
      </div>
   </body>
</html>