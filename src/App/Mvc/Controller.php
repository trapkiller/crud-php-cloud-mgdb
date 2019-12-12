<?php
   	namespace App\Mvc;
   	require_once 'Model.php';
   	class Controller
   	{
      	public function criaUsuario(){
      		$model = new Model;
      		$model->setUsuario();
      	}
      	public function editaUsuario(){
      		$model = new Model;
      		$model->editaUsuario();
      	}
      	public function deletaUsuario(){
      		$model = new Model;
      		$model->deletaUsuario();
      	}
   	}