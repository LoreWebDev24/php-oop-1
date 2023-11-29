<?php 

require __DIR__ . '/models/Production.php';

$titanic = new Production('Titanic', 'ENGL', 9);
$sharknado = new Production('Sharknado', 'ENGL', 4);
$sherlockHolmes = new Production('Sherlock Holmes: Game of Shadows', 'ENGL', 7);

$films = [$titanic,$sharknado,$sherlockHolmes];

foreach ($films as $film ) {
    var_dump($film);
    echo $film->getTitle() . ' ';
    echo $film->language . ' ';
    echo $film->rating . ' ';
}

?>