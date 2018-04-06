<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;


// Create a client with a base URI
$client = new GuzzleHttp\Client(['base_uri' => 'https://akabab.github.io/superhero-api/api/']);






$tabId = [30,38,63,70,149,160,213,289,303,389];
//select 10 id random

for ($i=0; $i <=9 ; $i++) { 
	# code...

$id= $tabId[$i];
$response = $client->request('GET', 'id/' . $id . '.json');
$body = $response->getBody();

$a = $body->getContents();
$b = json_decode($a);

echo "<pre>";
//var_dump($b->{'images'}->{'sm'});


echo '<img src='.$b->{'images'}->{'sm'}.'>';
echo '<form action="request.php" method="post">';
echo 	'<input type="submit" value="Choisir" name='. $i .'>'; 
echo '</form>';



}

function id(){
for ($i=0; $i <=9 ; $i++) { 

	if(isset($_POST[$i])){

		return $i;
	}

}
}
