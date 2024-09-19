<?php
trait Weight
{
    private $weight;
    private $unit;

    function setWeight($weight, $unit)
    {
        if (($weight <= 0) || (!is_numeric($weight))) {
            throw new Exception('Non puoi inserire un valore negativo o uguale a 0 o che non sia un numero');
        }
        $this->weight = $weight;
        $this->unit = $unit;
    }

    function getWeight()
    {
        return $this->weight . " " . $this->unit;
    }
}
