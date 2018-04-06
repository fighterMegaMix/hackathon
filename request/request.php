<?php

session_start();

require 'vendor/autoload.php' ;

require '../selectorCharacter.php' ;

use GuzzleHttp\Client;


// Create a client with a base URI
$client = new GuzzleHttp\Client(['base_uri' => 'https://akabab.github.io/superhero-api/api/']);

if (isset($_POST['joueur']))
{
$player2 = $_SESSION['joueur'] ;

// Send a request to id/'choix id character'.json
$response = $client->request('GET', 'id/' . "$player2" .'.json');

$body = $response->getBody();

$a = $body->getContents();
$b = json_decode($a);

// var_dump($b);

$name2 = $b->{'name'};
$intelligence2 = $b->{'powerstats'}->{'intelligence'};
$strength2 = $b->{'powerstats'}->{'strength'};
$speed2 = $b->{'powerstats'}->{'speed'};
$durability2 = $b->{'powerstats'}->{'durability'};
$power2 = $b->{'powerstats'}->{'power'};
$combat2 = $b->{'powerstats'}->{'combat'};
}

// Choix id character
$player1 = $_POST['joueur'] ;

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

var_dump($player1);

var_dump($player2);



