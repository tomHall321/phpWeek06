<?php

require __DIR__ . "/vendor/autoload.php";

function squares($numbers){
    $squares = [];

    foreach($numbers as $number){
        $squares[] = $number * $number;
    }

    return $squares;
}

dump(
    squares([2, 3, 4]), // [4, 9, 16]
    squares([2, 3, 4, 5, 6]), // [4, 9, 16, 25, 36]
);