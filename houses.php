<?php

include "includes/House.php";

$houses = [];

$house = new House;
$house->squaremeters = 75;
$house->rooms = 2;
$house->floors = 1;
array_push($houses, $house);

$house = new House;
$house->squaremeters = 125;
$house->rooms = 5;
$house->floors = 2;
array_push($houses, $house);

// procedual way
function getAvgSqmPerRoom($house) {
    return $house->squaremeters / $house->rooms;
}

foreach ($houses as $house) {
    echo getAvgSqmPerRoom($house)."\n";
}

// object oriented way
foreach ($houses as $house) {
    echo $house->getAvgSqmPerRoom()."\n";
}

