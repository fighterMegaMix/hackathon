

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mon formulaire HTML wallah</title>
</head>
<body>

	<?php

	require ('../instanciation/instanciation.php');
	require ('../game/game.php');



	if ($joueur1->getLife()>0 && $joueur2->getLife()>0 && $_SESSION['player1']['counter']>0 && $_SESSION['player2']['counter']>0)

		{ ?>

	<form method="post">

	
		<input type="submit" value="attack" name="joueur1Attack">
		

		<input type="submit" value="potion" name="joueur1Potion"> 



	</form>

	<form method="post">
		<input type="submit" value="attack" name="joueur2Attack"> 

		<input type="submit" value="potion" name="joueur2Potion">

	</form>

	<?php } 

	$dommage = Game($_POST, $joueur1, $joueur2);


	switch ($_POST) {
		case (isset($_POST['joueur1Attack'])) : //joueur1 attack
		$_SESSION['player2']['life'] = $joueur2->Defense($dommage);
		$_SESSION['player2']['life'] = $joueur2->setLife($_SESSION['player2']['life']);
		$_SESSION['player1']['counter'] -=1;
		break;

		case (isset($_POST['joueur1Potion'])) : //joueur1 se régénère
		$_SESSION['player1']['life'] = $joueur1->Potion();
		$_SESSION['player1']['life'] = $joueur2->setLife($_SESSION['player1']['life']);
		$_SESSION['player1']['counter'] -=1;
		break;

		case (isset($_POST['joueur2Attack'])) : //joueur2 attack
		$_SESSION['player1']['life'] = $joueur1->Defense($dommage);
		$_SESSION['player1']['life'] = $joueur2->setLife($_SESSION['player1']['life']);
		$_SESSION['player2']['counter'] -=1;
		break;

		case (isset($_POST['joueur2Potion'])) : //joueur2 se régénère
		$_SESSION['player2']['life'] = $joueur2->Potion();
		$_SESSION['player2']['life'] = $joueur2->setLife($_SESSION['player2']['life']);
		$_SESSION['player2']['counter'] -=1;
		break;
	}

	var_dump($dommage);
	var_dump($joueur1);
	echo '<br>';
	var_dump($joueur2);
	echo '<br>';
	echo '<br>';
	var_dump($_SESSION['player1']['life']);
	echo '<br>';
	var_dump($_SESSION['player2']['life']);
	echo '<br>';
	var_dump($_POST);
	echo '<br>';
	echo '<br>';
	echo $_SESSION['player1']['counter']. ' ' .$_SESSION['player2']['counter'];
	echo '<br>';
	echo '<br>';


	?>

</body>
</html>



