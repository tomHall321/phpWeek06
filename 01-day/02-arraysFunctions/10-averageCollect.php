<?php

require __DIR__ . "/vendor/autoload.php";

function average($numbers){
    // remember, reduce takes two arguments
    // the accumulator and each value in turn   
    // the initial value for $acc is null
    // so make sure you set it
    return collect($numbers)->reduce(fn($acc, $num) => $acc + $num,0) / count($numbers);
}
 

dump(
    average([2, 3, 4, 5, 6]), // 4
    average([2, 3]), // 2.5
    average([10, 30]), // 20
    average([-4, -8, -9]), // -7
);

