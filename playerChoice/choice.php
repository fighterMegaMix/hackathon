<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style_formulaire.css">
	<title>Mon formulaire HTML wallah</title>
</head>
<body>

	<form method="post">

	
		<input type="submit" value="attack" name="joueur1Attack">
		

		<input type="submit" value="potion" name="joueur1Potion"> 



	</form>

	<form method="post">
		<input type="submit" value="attack" name="joueur2Attack"> 

		<input type="submit" value="potion" name="joueur2Potion">

	</form>

	<?php

	if($_POST)
	{
		var_dump($_POST);
	} 
	?>

</body>
</html>



