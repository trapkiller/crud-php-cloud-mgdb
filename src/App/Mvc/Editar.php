<?php
   session_start(); 
   use MongoDB\BSON\ObjectID;
   require "../../../vendor/autoload.php";
   require '../config/config.php';
   $controller = new App\Mvc\Controller();
   $controller->editaUsuario();

   if (isset($_GET['id'])) {
      $livro = $collection->findOne(['_id' => new ObjectID($_GET['id'])]);
   }
?>


<!DOCTYPE html>
<html>
   <head>
      <title>Painel Administrativo - Biblioteca</title>
      <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
   </head>
   <body>
      <div class="container">
         <h1>Editar Livro</h1>
         <a href="Visualizar.php" class="btn btn-primary">Voltar</a>

         <form method="POST">
            <div class="form-group">
               <strong>Nome:</strong>
               <input type="text" name="nome" value="<?php echo $livro->nome; ?>" required class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
               <strong>Informações:</strong>
               <textarea class="form-control" name="informacoes" placeholder="Informações" placeholder="Detail"><?php echo $livro->informacoes; ?></textarea>
            </div>
            <div class="form-group">
               <strong>Autor:</strong>
               <input type="text" name="autor" value="<?php echo $livro->autor; ?>" class="form-control" placeholder="Autor" required>
            </div>
            <div class="form-group">
               <strong>Ano de lançamento:</strong>
               <input type="text" name="lancamento" value="<?php echo $livro->lancamento; ?>" class="form-control" placeholder="Lancamento" required>
            </div>
            <div class="form-group">
               <button type="submit" name="submit" class="btn btn-success">Atualizar</button>
            </div>
         </form>
      </div>
   </body>
</html>