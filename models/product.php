<?php

//Prodotto e-commerce

class Product {
    protected $name;
    protected $brand;
    protected $price;

    public function __construct ($_name, $_brand, $_price) {
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $_price;
    }
}

