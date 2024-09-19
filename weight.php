<?php
trait Weight
{
    private $weight;
    private $unit;

    function setWeight($weight, $unit)
    {
        if ($weight <= 0) {
            throw new Exception('Non puoi inserire un peso negativo o uguale a 0');
        }
        $this->weight = $weight;
        $this->unit = $unit;
    }

    function getWeight()
    {
        return $this->weight . " " . $this->unit;
    }
}
