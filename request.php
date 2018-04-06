<?php

require 'vendor/autoload.php' ;

require 'selectorCharacter.php' ;

use GuzzleHttp\Client;

if (isset($_POST)) {
	$_SESSION['player2']= $_POST
	else {
		$_SESSION['player1']= selector($_POST)
	}
}

echo $_SESSION['player1'];

// Create a client with a base URI
$client = new GuzzleHttp\Client(['base_uri' => 'https://akabab.github.io/superhero-api/api/']);


if ($_POST)	
{
var_dump($_POST['joueur1']);
if (isset($_POST['joueur1']))
{
// Choix id character
$player1 = $_POST['joueur1'] ;

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


header('Location: selectorCharacter2.php');
}

require ('selectorCharacter2');

if (isset($_POST['joueur2']))
{

$player2 = $_POST['joueur2'] ;

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



echo $name1, "<br>" , $strength1, "<br>", $speed1,"<br>",
	 $durability1, "<br>", $power1, "<br>", $combat1;

echo $name2, "<br>" , $strength2, "<br>", $speed2,"<br>",
	 $durability2, "<br>", $power2, "<br>", $combat2;

}