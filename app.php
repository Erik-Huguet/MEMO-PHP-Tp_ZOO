<?php
namespace App;

require __DIR__ . '/vendor/autoload.php';

use App\Fish;

$fish1 = new Fish('bubulle');
echo $fish1->getNoise();
$bubleFish1 = new BubbleFish('glubulle');
echo $bubleFish1->getNoise();