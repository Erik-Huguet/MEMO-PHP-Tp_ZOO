<?php
namespace App;

require __DIR__ . '/vendor/autoload.php';
use App\Fish;


$fish1 = new Fish('bubble');

echo $fish1->getNoises();

$fishCat = new CatFish('glubule');

echo "Je m\'appelle ". $fishCat->getName() .", ".  $fishCat->getNoises();