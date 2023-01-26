<?php
namespace App;

use App\Animals\BubbleFish;
use App\Animals\CatFish;
use App\Animals\ClownFish;
use App\Animals\Elephant;
use App\Animals\Fish;
use function var_dump;

require __DIR__ . '/vendor/autoload.php';



$fish1 = new Fish('bubble');

echo $fish1->noise();

$fishCat = new CatFish('glubule');

echo "Je m'appelle ". $fishCat->getName() .", ".  $fishCat->noise();

$clownFish = new ClownFish('lolFish');

echo $clownFish->noise();

$elephant1 = new Elephant('dumbo');

echo $elephant1->noise();

$animals = [];

    for($i = 0; $i < 5 ; $i++){
        $animals[] = new Fish("fish $i");
    };
    for($i = 0; $i < 3 ; $i++){
       $animals[] = new BubbleFish("bubbleFish $i");
    };
    for($i = 0; $i < 1 ; $i++){
        $animals[] = new ClownFish("clownFish $i");
    };
    for($i = 0; $i < 2 ; $i++){
        $animals[] = new CatFish("catFish $i");
    };
    for($i = 0; $i < 3 ; $i++){
        $animals[] = new Elephant("elephant $i");
    };


//var_dump($animals);
 foreach($animals as $animal){
     echo $animal->noise();

 }