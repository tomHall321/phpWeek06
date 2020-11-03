<?php

require __DIR__ . "/vendor/autoload.php";

function z0rQ($str){
    return preg_match("/[qQzZ]/", $str) === 1;
}

dump(zOrQ("blah")); // false
dump(zOrQ("blqh")); // true
dump(zOrQ("bZ3h5")); // true
dump(zOrQ("bz3h5")); // true