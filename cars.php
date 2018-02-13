<?php

include "includes/Car.php";

$cars = [];

$nissan = new Car;
$nissan->manufacturer = "Nissan";
$nissan->model = "Qashqai";
$nissan->year = 2008;
$nissan->fourWheelDrive = false;
array_push($cars, $nissan);

$citroen = new Car;
$citroen->manufacturer = "Citroen";
$citroen->model = "C4";
$citroen->fourWheelDrive = false;
array_push($cars, $citroen);

// foreach ($cars as $car) {
//     $age = 2018 - $car->year;
//     echo "Car " . $car->manufacturer . " " . $car->model . " is $age old.\n";
// }

foreach ($cars as $car) {
    echo "I am a car of model " . $car->getModel();
    echo "\n";

    echo "I am of year " . $car->getYear();
    echo "\n";

    echo "I am of " . $car->getAge() . " years old";
    echo "\n";
}
