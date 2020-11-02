<?php

require __DIR__ . "/vendor/autoload.php";

    // the initial value for $acc needs to be start of numbers index 
    // The return value is passed in as the accumulator value for the next iteration

function largest($numbers) {
    return collect($numbers)->reduce(fn($acc, $value) => $acc > $value ? $acc : $value, $numbers[0]);
}

dump(
    largest([2, 4, 6, 4, 7, 5]), // 7
    largest([-2, 4, 6, 4, 2, -7, 5]), // 6
    largest([-2, -4, -4, -7, -5]), // -2
);