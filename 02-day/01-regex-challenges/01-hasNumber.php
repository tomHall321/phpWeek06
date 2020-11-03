<?php

require __DIR__ . "/vendor/autoload.php";

function hasNumber($str) {
    // … your code here
}

dump(hasNumber("blah")); // false
dump(hasNumber("bl3h")); // true
dump(hasNumber("bl3h5")); // true