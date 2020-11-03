<?php

require __DIR__ . "/vendor/autoload.php";

//need to match and remove anything that's not a word so ^\w 

function words($str){
    return preg_split("/[^\w]+/",$str) === 1;
}

dump(words("This is a sentence")); // ["This", "is", "a", "sentence"]
dump(words("Hello, my name is Dolemite")); // ["Hello", "my", "name", "is", "Dolemite"]