<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;


// Create a client with a base URI
$client = new GuzzleHttp\Client(['base_uri' => 'https://akabab.github.io/superhero-api/api/']);






$tabId = [30,38,63,70,149,160,213,289,303,389];
//select 10 id random

foreach ($tabId as $key => $value) { 

$response = $client->request('GET', 'id/' . $value . '.json');
$body = $response->getBody();

$a = $body->getContents();
$b = json_decode($a);

echo "<pre>";
//var_dump($b->{'images'}->{'sm'});


echo '<img src='.$b->{'images'}->{'sm'}.'>';
echo '<form action="request.php" method="post">';
echo 	'<input type="submit" value="' .$value. '" name="joueur1">'; 
echo '</form>';



}

var_dump($_POST);




