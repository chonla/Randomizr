<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Chonla\Randomizr\Randomizr;

$rnd = new Randomizr;

echo $rnd->number(10) . "\n";
echo $rnd->alphabet(10) . "\n";
echo $rnd->alphanumeric(10) . "\n";
echo $rnd->hexadecimal(10) . "\n";