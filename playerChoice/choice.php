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


	if ($joueur1->getLife()>0 && $joueur2->getLife()>0)

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

	$joueur1->Defense(Game($_POST, $joueur1, $joueur2));
	var_dump($joueur1);

	?>

</body>
</html>



