<?php 

class Production {
    public $title;
    public $language;
    public $rating;

    function __construct($_title, $_language, $_rating) {
        $this->title = $_title;
        $this->language = $_language;
        $this->rating = $_rating;
    }
}

$titanic = new Production('Titanic', 'ENGL', 9);
$sharknado = new Production('Sharknado', 'ENGL', 4);
$sherlockHolmes = new Production('Sherlock Holmes: Game of Shadows', 'ENGL', 7);

$films = [$titanic,$sharknado,$sherlockHolmes];

foreach ($films as $film ) {
    var_dump($film);
    echo $film->title . ' ';
    echo $film->language . ' ';
    echo $film->rating . ' ';
}


?>