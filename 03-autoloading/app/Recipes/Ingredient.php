<?php

namespace App\Recipes;

class Ingredient
{
    private $nameOfIngredient;
    private $dietaryInfo;

    public function __construct($nameOfIngredient, $dietaryInfo)
    {
        $this->nameOfIngredient = $nameOfIngredient;
        $this->dietaryInfo = collect($dietaryInfo);
    }

    public function name()
    {
        return $this->nameOfIngredient;
    }

    public function vegan()
    {
        return !$this->dietaryInfo->contains("animal produce");
        
    }
}