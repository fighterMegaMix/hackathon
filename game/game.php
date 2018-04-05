<?php

require ('../instanciation/instanciation.php');
require ('../playerChoice/choice.php');




	switch ($_POST) {
		case (isset($_POST['joueur1Attack'])) : //joueur1 attack
		$damage = $joueur1->Attack();
		$joueur2->Defense($damage);
		break;

		case (isset($_POST['joueur1Potion'])) : //joueur1 se régénère
		$joueur1->Potion();
		break;

		case (isset($_POST['joueur2Attack'])) : //joueur2 attack
		$damage = $joueur2->Attack();
		$joueur1->Defense($damage);
		break;

		case (isset($_POST['joueur2Potion'])) : //joueur2 se régénère
		$joueur2->Potion();
		break;
	}