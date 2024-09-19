<?php
class PetsProduct
{
    public $img;
    public $name;
    public $categories = [];
    public $price;
    public $pieces;


    function __construct($img, $name, array $categories, $price, $pieces)
    {
        $this->img = $img;
        $this->name = $name;
        $this->categories = $categories;
        $this->price = $price;
        $this->pieces = $pieces;
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
        return '';
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
