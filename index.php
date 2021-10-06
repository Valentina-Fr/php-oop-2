<?php

require_once __DIR__.'/models/product.php';

$product1 = new Product("phone", "Apple", 1000);

var_dump($product1);