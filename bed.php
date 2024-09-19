<?php
require_once __DIR__ . '/petsProduct.php';

class Bed extends PetsProduct
{
    public $material;
    public $color;
    public $dimensions;

    function __construct($img, $name, array $category, $material, $color, $dimensions, $price, $pieces)
    {
        parent::__construct($img, $name, $category, $price, $pieces);
        $this->material = $material;
        $this->color = $color;
        $this->dimensions = $dimensions;
    }
    function getProductDetails()
    {
        return "<p><strong>Main Material:</strong> {$this->material}</p>
                <p><strong>Color:</strong> {$this->color}</p>
                <p><strong>Dimensions:</strong> {$this->dimensions}</p>";
    }
}
