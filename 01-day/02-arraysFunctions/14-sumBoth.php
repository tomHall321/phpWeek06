<?php

require __DIR__ . "/vendor/autoload.php";

function sum($numbers){
    $summedArray = 0;
    foreach($numbers as $number){
        $summedArray += $number;
    }
    return $summedArray;
}

function sumBoth($numbers1, $numbers2){
    return sum($numbers1) + sum($numbers2);
}

dump(
    sumBoth([2, 3, 4, 5, 6], [1, 2, 3, 4]), // 30
    sumBoth([2, 3, 4, 5, 6], [5, 10, 12]), // 47
);