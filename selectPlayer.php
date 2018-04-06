<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/select.css">
</head>


<?php
session_start();
require_once 'getJsonInfo.php';
require_once 'fillSessionPlayer.php';
require 'vendor/autoload.php';
$availableFighters = [38,63,70,149,160,213,289,298,303,389 ];

if (isset($_POST['submit'])) {
  $information = getJsonInfo($_POST['submit']);
  if (isset($_SESSION['player1']['id'])){
    fillSessionPlayer('player2', $information);
    $_POST= array();
    header('Location: playerChoice/choice.php');
  }else{
      fillSessionPlayer('player1', $information);
  }
}
?>

<body class="selectBody">

  <div class="container-fluid">
    <div class="row d-flex justify-content-around">
      <h1 class="playerSelection">Select your <?php if (isset($_SESSION['player1']['id']) && ($_SESSION['player1']['id'] != "")){
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
        <div>
          <h4 class="name"><?= $information['name'] ?></h4>
          <div>
            <div>
            <img class="card-img-top" src="<?= $information['images']['md'] ?>" alt="Card image" style="width:100%">

          
              <form class="form-inline" method="post">
                  <button type="submit" class="btn selectCharacter" name="submit" value="<?= $value ?>">Select</button>
              </form>
            </div>
          </div>
        </div>
<?php
}
?>

    </div>
  </div>
</body>








