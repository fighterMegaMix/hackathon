<?php


function Game ($choice, $joueur1, $joueur2)
{
	switch ($_POST) {
		case (isset($_POST['joueur1Attack'])) : //joueur1 attack
		$damage = $joueur1->Attack();
		return $damage;

		case (isset($_POST['joueur2Attack'])) : //joueur2 attack
		$damage = $joueur2->Attack();
		return $damage;

	}

}