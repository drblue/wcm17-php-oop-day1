<?php

$cars = [
    [
        'manufacturer' => 'Nissan',
        'model' => 'Qashqai',
        'year' => 2008,
        '4wd' => false,
    ],
    [
        'manufacturer' => 'Toyota',
        'model' => 'RAV4',
        'year' => 2018,
        '4wd' => true,
    ],
    [
        'manufacturer' => 'Peugeot',
        'model' => '307',
        'year' => 2014,
        '4wd' => false,
    ],
    [
        'manufacturer' => 'Citroen',
        'model' => 'C4',
        '4wd' => false,
    ],
];

foreach ($cars as $car) {
    $age = 2018 - $car['year'];
    echo "Car " . $car['manufacturer'] . " " . $car['model'] . " is $age old.\n";
}
