<?php

echo "<pre>";

$horses = ['Pelle', 'Blixten', 'Harry', 'Boy'];
$horses[0];

$horses = [];
$horses[] = 'Pelle';
$horses[] = 'Blixten';
$horses[] = 'Harry';

$horses = [];
array_push($horses, 'Pelle', 'Blixten', 'Harry');
$horse1 = $horses[0]; // Pelle

// array_pop($horses);
array_shift($horses);
$horse1 = $horses[0]; // Blixten

$horses = ['Pelle' => 'C-Ponny', 'Blixten' => 'Ardenner'];
$keys = array_keys($horses); // Pelle, Blixten
$values = array_values($horses); // C-Ponny, Ardenner

if (array_key_exists('Pelle', $horses)) {
	echo "Pelle exists!";
} else {
	echo "No Pelle";
}

if ($horses['Pelle']) {

}

array_push($horses, 'Pelle', 'Blixten', 'Harry');

foreach ($horses as $horse) {
	echo $horse;
}


$horses = ['Pelle' => 'C-Ponny', 'Blixten' => 'Ardenner'];
if (array_search('Ardenner', $horses) === true) {
	echo "There is a horse of type Ardenner";
}

$myArdennerName = array_search('Ardenner', $horses); // Blixten

$horses[] = 'Pelle';
$horses[] = 'Blixten';
$horses[] = 'Harry';
array_search('Blixten', $horses); // 1
$horses[1];

array_search('Pelle', $horses); // 0
$intZero = 0; // false-y
$intOne = 1; // true-thy

if ($intZero == false) {
	echo "intZero är false";
}

if ($intOne == true) {
	echo "intOne är true";
}

$horses = ['Pelle' => 'C-Ponny', 'Blixten' => 'Ardenner'];
if (array_search('Balthazar', $horses) !== false) {
	echo "Pelle finns";
} else {
	echo "Pelle finns INTE";
}
