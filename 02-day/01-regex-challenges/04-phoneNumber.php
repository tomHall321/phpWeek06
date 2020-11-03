<?php

require __DIR__ . "/vendor/autoload.php";

/// ^abc/ - would match 'abc' but not '0abc'
// + as we want to match more than once
// abc$ - - would match 'abc' but not 'abc0'

function phoneNumber($str){
    return preg_match("/^[\d-]+$/", $str) === 1;
}

dump(phoneNumber("blah")); // false
dump(phoneNumber("12-323-5-344")); // true
dump(phoneNumber("12-34-a334-43")); // false
dump(phoneNumber("--123----23123")); // true