<?php

require __DIR__ . "/vendor/autoload.php";

function even($a){
    return $a % 2 === 0;
}

dump(even(1)); // false
dump(even(2)); // true