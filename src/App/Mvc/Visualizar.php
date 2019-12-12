<?php
   session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <title>CRUD com MongoDB</title>
      <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   </head>
   <body>
      <div class="container">
         <h1 class="mt-3">Painel Administrativo - Biblioteca</h1>
         <a href="Criar.php" class="btn btn-success mt-2">Adicionar Livro</a>
         <?php
            if(isset($_SESSION['success'])){
               echo "<div class='alert alert-success mt-2'>".$_SESSION['success']."</div>";
            }
         ?>

         <table class="table table-borderd">
            <tr>
               <th>Nome</th>
               <th>Informações</th>
               <th>Autor</th>
               <th>Lançamento</th>
               <th>Ações</th>
            </tr>
            <?php
               require '../config/config.php';
               $livros = $collection->find([]);

               foreach($livros as $livro) {
                  echo "<tr>";
                  echo "<td>".$livro->nome."</td>";
                  echo "<td>".$livro->informacoes."</td>";
                  echo "<td>".$livro->autor."</td>";
                  echo "<td>".$livro->lancamento."</td>";
                  echo "<td>";
                  echo "<a href='Editar.php?id=".$livro->_id."' class='settings'><i class='material-icons'>&#xE8B8;</i></a>";
                  echo "<a href='Deletar.php?id=".$livro->_id."' class='delete'><i class='material-icons'>&#xE5C9;</i></a>";
                  echo "</td>";
                  echo "</tr>";
               };
            ?>
         </table>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   </body>
</html>