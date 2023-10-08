<?php

$bmw = [
    'model' => 'X5',
    'speed' => '120',
    'doors' => '5',
    'year' => '2015',
];

$toyota = [
    'model' => 'camry',
    'speed' => '110',
    'doors' => '4',
    'year' => '2017',
];

$opel = [
    'model' => 'astra',
    'speed' => '100',
    'doors' => '4',
    'year' => '2012',
];


$cars = [];
$cars['bmw'] = $bmw;
$cars['toyota'] = $toyota;
$cars['opel'] = $opel;

foreach ($cars as $key => $value) {
    echo "CAR $key <br>";
    foreach ($value as $v) {
        echo $v . ' ';
    }
    echo '<br><br>';
}

?>