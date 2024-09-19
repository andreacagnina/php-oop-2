<?php
class Category
{
    public $animal;
    public $icon;

    function __construct($animal, $icon)
    {
        $this->animal = $animal;
        $this->icon = $icon;
    }
}
