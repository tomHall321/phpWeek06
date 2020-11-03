<?php

require __DIR__ . "/vendor/autoload.php";

//need to remove whitespace - so use \s
//spaces could be infront of or after text, so use () | ()
// ^\s+ whitespace before
// \s+$ whitespace after
//then replace whitespace with ""
//compare email address with whitespace removed with FILTER_VALIDATE_EMAIL


function validEmail($str) {
    $removeSpaces = preg_replace("/(^\s+)|(\s+$)/", "", $str);
    return filter_var($removeSpaces, FILTER_VALIDATE_EMAIL) === $removeSpaces;
}

dump(validEmail(" blahf   ")); // false
dump(validEmail(" blah@f")); // false
dump(validEmail("blah@ fish.horse")); // false
dump(validEmail(" blah@fish.horse")); // true
dump(validEmail("blah@fish.horse ")); // true
dump(validEmail(" blah@fish.horse ")); // true