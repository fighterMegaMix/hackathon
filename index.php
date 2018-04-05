<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	    <title>Form</title>
	</head>
	<body>

		<?php

		require 'vendor/autoload.php';
		$i=0;
		$client = new GuzzleHttp\Client(

						['base_uri' => 'akabab.github.io/superhero-api/api/'

						]);
		for ($i=1; $i<8; $i++)
		{
			$lien = 'id/'. $i .'.json';
		$response = $client->request('GET', $lien);

		$body = $response->getBody();
		$a =  $body->getContents();
		$b = json_decode($a);




 		
		echo '<img src ="'. $b->{'images'}->{'md'} .'">'; }

		?>







  	</body>
</html>
