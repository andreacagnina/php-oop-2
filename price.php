<?php
trait Price
{
    private $price;

    function setPrice($price)
    {
        if (!is_numeric($price) || ($price <= 0)) {
            throw new Exception('Non siamo qui a regalare roba ai nostri clienti!');
        }
        $this->price = $price;
    }

    function getPrice()
    {
        return $this->price . ' ' . '€';
    }
}
