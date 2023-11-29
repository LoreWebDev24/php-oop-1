<?php 

require __DIR__ . '/models/Movie.php';
require __DIR__ . '/models/Serie.php';

// IST. DI MOVIE

$titanic = new Movie('Titanic', 'ENGL', 9, '200.000 $','2 hours');
$sharknado = new Movie('Sharknado', 'ENGL', 4,'200.000 $','2 hours');
$sherlockHolmes = new Movie('Sherlock Holmes: Game of Shadows', 'ENGL', 7,'200.000 $','1 hours');
$lostHighways = new Movie ('Lost Highways', 'ENGL', 10,'2.200.000 $','3 hours');
$laFabbricaDiCioccolato =  new Movie ('La Fabbrica di Cioccolato', 'ENGL', 8,'2.200.000 $','2 hours');


// IST. DI SEIRE

$sherlock = new Serie ('Sherlock', 'ENGL', 8, '5 Seasons');
$twinPeaks = new Serie ('Twin Peaks', 'ENGL', 10, '3 Seasons');
$howIMetYourMother = new Serie ('How I met Your Mother', 'ENGL', 7, '8 Seasons');
$houseOfCards = new Serie ('House of Cards', 'ENGL', 7, '8 Seasons');
$casaDePapel = new Serie ('La Casa de Papel', 'ESP', 8, '5');


$contents = [$titanic,$sharknado,$sherlockHolmes,$lostHighways,$laFabbricaDiCioccolato,$sherlock,$twinPeaks,$howIMetYourMother,$houseOfCards,$casaDePapel];

// foreach ($contents as $content ) {
//     echo $content->getTitle() . ' ';
//     echo $content->language . ' ';
//     echo $content->rating . ' ';
// }


foreach ($contents as $content) {
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP-1</title>
</head>
<style>
  .b-bottom {
    border-bottom: 1px solid lightgrey;
  }
</style>
<body>
<div class="b-bottom">
      <h3><?php echo $content->getTitle() ?></h3>
      <span>LANG: <?php echo $content->language ?></span>
      <span>/RATING: <?php echo $content->rating ?></span>
    </div>
  
  <?php

  }

?>
</body>
</html>
  
