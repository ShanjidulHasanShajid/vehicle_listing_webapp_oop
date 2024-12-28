<?php

abstract class VehicleBase {
    protected $name , $type, $price, $image;

    public function __construct($name, $type, $price, $image)
    {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->image = $image;
    }

    abstract public function getDetails();
}
