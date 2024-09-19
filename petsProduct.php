<?php
require_once __DIR__ . '/price.php';
class PetsProduct
{
    use price;

    public $img;
    public $name;
    public $categories = [];
    public $pieces;
    function __construct($img, $name, array $categories, $price, $pieces)
    {
        $this->img = $img;
        $this->name = $name;
        $this->categories = $categories;
        $this->pieces = $pieces;

        try {
            $this->setPrice($price);
        } catch (Exception $e) {
            echo 'Alert:' . " " . $e->getMessage();
        }
    }

    function getAllCategories()
    {
        $caneEgatto = [];
        foreach ($this->categories as $category) {
            $caneEgatto[] = $category->animal . " " . $category->icon;
        }
        return implode(' and ', $caneEgatto);
    }

    function getProductDetails()
    {
        return '<p><strong>Nome:</strong>' . $this->name . '</p>
                <p><strong>Prezzo:</strong>' . $this->getPrice() . '</p>';
    }

    public function setPieces($stock)
    {
        if ($stock == 0) {
            return $stock = 'Sold Out';
        } else if ($stock < 5) {
            return $stock = 'Few';
        } else {
            return $stock = 'In stock';
        }
    }
}
