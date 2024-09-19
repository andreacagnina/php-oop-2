<?php
trait Price
{
    private $price;

    function setPrice($price)
    {
        if (!is_numeric(($price)) || ($price <= 0)) {
            throw new Exception('Non puoi inserire un valore diverso da un numero e il prezzo non può essere inferiore o uguale a 0');
        }
        $this->price = $price;
    }

    function getPrice()
    {
        return $this->price . ' ' . '€';
    }
}
