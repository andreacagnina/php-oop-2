<?php
require_once __DIR__ . '/PetsProduct.php';
require_once __DIR__ . '/weight.php';

class Food extends PetsProduct
{
    use Weight;

    public $taste;
    public $ingredients;


    function __construct($img, $name, array $category, $taste, $ingredients, $weight, $unit, $price, $pieces)
    {
        parent::__construct($img, $name, $category, $price, $pieces);
        $this->taste = $taste;
        $this->ingredients = $ingredients;

        try {
            $this->setWeight($weight, $unit);
        } catch (Exception $e) {
            echo 'Alert:' . " " . $e->getMessage();
        }
    }
    function getProductDetails()
    {
        return "<p><strong>Taste:</strong> {$this->taste}</p>
                <p class='ovf'><strong>Ingredients:</strong> {$this->ingredients}</p>
                <p><strong>Weight:</strong> {$this->getWeight()}</p>";
    }
}
