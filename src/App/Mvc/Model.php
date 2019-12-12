<?php
    namespace App\Mvc;
    use MongoDB\BSON\ObjectID;
    class Model
    {
    	public function index(){
    		echo 'teste';
    	}

      	public function setUsuario(){
      		require '../config/config.php';
      		if(isset($_POST['submit'])){
      		   $insertOneResult = $collection->insertOne([
      		       'nome' => $_POST['nome'],
      		       'informacoes' => $_POST['informacoes'],
                 'autor' => $_POST['autor'],
                 'lancamento' => $_POST['lancamento'],
      		   ]);
      		   $_SESSION['success'] = "Livro adicionado com sucesso";
             header("Location: Visualizar.php");
      		}
      	}

      	public function editaUsuario(){
      		require '../config/config.php';
      		if(isset($_POST['submit'])){
      		   $collection->updateOne(
      		       ['_id' => new ObjectID($_GET['id'])],
      		       ['$set' => ['nome' => $_POST['nome'], 'informacoes' => $_POST['informacoes'], 'autor' => $_POST['autor'], 'lancamento' => $_POST['lancamento'],]]
      		   );
      		   $_SESSION['success'] = "Livro atualizado com sucesso";
      		   header("Location: Visualizar.php");
      		}
      	}

      	public function deletaUsuario(){
      		require '../config/config.php';
      		$collection->deleteOne(['_id' => new ObjectID($_GET['id'])]);
      		$_SESSION['success'] = "Livro deletado com sucesso";
      		header("Location: Visualizar.php");
      	}
    }