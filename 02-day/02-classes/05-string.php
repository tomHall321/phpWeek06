<?php

require __DIR__ . "/vendor/autoload.php";

class Stringy
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function lower()
    {
        return strtolower($this->string);
    }

    public function upper()
    {
        return strtoupper($this->string);
    }

    public function append($willBeConcatenated)
    {
        return $this->string.$willBeConcatenated;
    }

    public function repeat($repeatBy)
    {
        // $eventualString = "";

        // for($i=0; $i<$repeatBy; $i+=1){
        //     $eventualString .= $this->string;
        // }
        // return $eventualString;

        return str_repeat($this->string, $repeat);
    }
}

$string = new Stringy("Na");

dump($string);

// it can lowercase a string
dump($string->lower()); // "na"

// it can uppercase a string
dump($string->upper()); // "NA"

// it can concatenate
dump($string->append("blah")); // "Nablah"

// it can repeat a string
dump($string->repeat(5)); // "NaNaNaNaNa"