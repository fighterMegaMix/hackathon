<!doctype html>
<?php require 'choice.php'; ?>
<html>
	<head><title>FIGHT</title>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"

    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"

    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<meta charset="utf-8" />
  <link rel="stylesheet" href="/css/GamePlay.css" />

	</head>

	<body>
		<h1>FIGHT</h1>
<div class="flip3Dplayer1">

  <div class="back">
		<form method="post">
			<input type="submit" value="attack" name="joueur1Attack">
			<input type="submit" value="potion" name="joueur1Potion">
		</form>

      <p>Name:<?php echo $_SESSION[$player1]['name']; ?> </p>
      <p> Life:<?php $_SESSION[$player1]['life']; ?> </p>
      <p>intelligence: <?php $_SESSION[$player1]['intelligence']; ?> </p>
    </div>
    <div class="front">

    </div>
</div>



<div class="flip3Dplayer2">
  <div class="back">
		<form method="post">
			<input type="submit" value="attack" name="joueur2Attack">
			<input type="submit" value="potion" name="joueur2Potion">
		</form>
    <p>Name:<?php echo $_SESSION[$player2]['name']; ?> </p>
    <p> Life:<?php $_SESSION[$player2]['life']; ?> </p>
    <p>intelligence:<?php $_SESSION[$player2]['intelligence']; ?> </p>
  </div>

  <div class="front">

  </div>

</div>





	</body>
</html>
