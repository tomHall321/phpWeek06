<?php

require __DIR__ . "/vendor/autoload.php";

$total = 0;

for($i = 0; $i <= 50; $i += 1){
    $total = $total + $i;
    dump($total);
}