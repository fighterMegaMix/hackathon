<?php

session_start();

require ('fillSessionPlayer.php');
require ('characters.php');

$joueur1 = new Characters ($_SESSION['player1']);
$joueur2 = new Characters ($_SESSION['player2']);
