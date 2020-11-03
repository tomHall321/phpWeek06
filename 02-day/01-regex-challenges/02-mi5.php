<?php

require __DIR__ . "/vendor/autoload.php";

// 00 followed by digit, digit is \d

function mi5($str){
    return preg_match("/00\d/", $str) === 1;
}

dump(mi5("007")); // true
dump(mi5("oo8")); // false
dump(mi5("003")); // true
dump(mi5("M")); // false