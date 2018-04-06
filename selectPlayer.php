<?php
session_start();
require_once 'getJsonInfo.php';
require_once 'fillSessionPlayer.php';
require 'vendor/autoload.php';
$availableFighters = [37,38,63,70,149,160,213,289,303,389];
var_dump($_POST);
if (isset($_POST['submit'])) {
  $information = getJsonInfo($_POST['submit']);
  if (isset($_SESSION['player1']['id'])){
    fillSessionPlayer('player2', $information);
    header('Location: playerChoice/choice.php');
  }else{
      fillSessionPlayer('player1', $information);
  }
}
?>

<body>

  <div class="container-fluid">
    <div class="row d-flex justify-content-around">
      <h1>Select your <?php if (isset($_SESSION['player1']['id']) && ($_SESSION['player1']['id'] != "")){
        echo 'opponent';
      }else{
        echo 'fighter';
      }
      ?></h1>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row d-flex justify-content-around">

<?php
foreach ($availableFighters as $value) {
    $information = getJsonInfo($value);
?>
        <div class="card mt-2 mb-2" style="width:320px">
          <img class="card-img-top" src="<?= $information['images']['md'] ?>" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title"><?= $information['name'] ?></h4>

            <p class="card-text">
            <ul>
                <li>Speed: <?= $information['powerstats']['speed'] ?></li>
                <li>Special attack: <?= $information['powerstats']['power'] ?></li>
                <li>Attack: <?= $information['powerstats']['strength'] ?></li>
                <li>Defense: <?= $information['powerstats']['durability'] ?></li>
                <li>Intelligence: <?= $information['powerstats']['intelligence'] ?></li>
                <li>Combat: <?= $information['powerstats']['combat'] ?></li>
              </ul>
            </p>
            <form class="form-inline" method="post">
                <button type="submit" class="btn btn-primary" name="submit" value="<?= $value ?>">Select</button>
            </form>
          </div>
        </div>
<?php
}
?>

    </div>
  </div>
</body>