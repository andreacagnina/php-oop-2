<?php
require_once __DIR__ . '/PetsProduct.php';

class Food extends PetsProduct
{
    public $taste;
    public $ingredients;
    public $weight;

    function __construct($img, $name, array $category, $taste, $ingredients, $weight, $price, $pieces)
    {
        parent::__construct($img, $name, $category, $price, $pieces);
        $this->taste = $taste;
        $this->ingredients = $ingredients;
        $this->weight = $weight;
    }
    function getProductDetails()
    {
        return "<p><strong>Taste:</strong> {$this->taste}</p>
                <p class='ovf'><strong>Ingredients:</strong> {$this->ingredients}</p>
                <p><strong>Weight:</strong> {$this->weight}</p>";
    }
}
