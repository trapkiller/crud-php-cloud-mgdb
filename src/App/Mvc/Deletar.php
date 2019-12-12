<?php
	session_start();
	require "../../../vendor/autoload.php";
	$controller = new App\Mvc\Controller();
	$controller->deletaUsuario();
?>