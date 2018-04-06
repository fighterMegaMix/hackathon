<?php
session_start();


$_SESSION['joueur'] = $player1;
$_SESSION['joueur2'] = $player2;


require 'vendor/autoload.php' ;

require 'selectorCharacter.php' ;

use GuzzleHttp\Client;


// Create a client with a base URI
$client = new GuzzleHttp\Client(['base_uri' => 'https://akabab.github.io/superhero-api/api/']);





// Choix id character
$player1 = $tabId[id()] ;


// Send a request to id/'choix id character'.json
$response = $client->request('GET', 'id/' . "$player1" .'.json');

$body = $response->getBody();

$a = $body->getContents();
$b = json_decode($a);

// var_dump($b);


$name1 = $b->{'name'};
$intelligence1 = $b->{'powerstats'}->{'intelligence'};
$strength1 = $b->{'powerstats'}->{'strength'};
$speed1 = $b->{'powerstats'}->{'speed'};
$durability1 = $b->{'powerstats'}->{'durability'};
$power1 = $b->{'powerstats'}->{'power'};
$combat1 = $b->{'powerstats'}->{'combat'};


echo $name1, "<br>" , $strength1, "<br>", $speed1,"<br>",
	 $durability1, "<br>", $power1, "<br>", $combat1;



$player2 = $tabId[id()] ;


// Send a request to id/'choix id character'.json
$response = $client->request('GET', 'id/' . "$player2" .'.json');

$body = $response->getBody();

$a = $body->getContents();
$b = json_decode($a);

// var_dump($b);

	

$name1 = $b->{'name'};
$intelligence1 = $b->{'powerstats'}->{'intelligence'};
$strength1 = $b->{'powerstats'}->{'strength'};
$speed1 = $b->{'powerstats'}->{'speed'};
$durability1 = $b->{'powerstats'}->{'durability'};
$power1 = $b->{'powerstats'}->{'power'};
$combat1 = $b->{'powerstats'}->{'combat'};


echo $name1, "<br>" , $strength1, "<br>", $speed1,"<br>",
	 $durability1, "<br>", $power1, "<br>", $combat1;