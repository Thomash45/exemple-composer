<?php



require_once __DIR__ . '/../vendor/autoload.php';


$hello1 = new \App\Wcs\Hello();

echo $hello1->talk();


$hello2 = new \HelloWorld\SayHello();

echo $hello2->world();





