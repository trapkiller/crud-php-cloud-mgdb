<?php
	require "../../../vendor/autoload.php";
	//$collection = (new MongoDB\Client)->biblioteca->livros;


	$client = new MongoDB\Client(
	    'mongodb+srv://teste:senha@dbteste-rbbec.mongodb.net/test?retryWrites=true&w=majority');

	$collection = $client->banco->livros;

?>