<?php

require_once __DIR__.'/models/product.php';
require_once __DIR__.'/models/user.php';


$product1 = new Product("phone", "Apple", 1000);
var_dump($product1);

$user1 = new User("Mario", "Rossi", "mr@gmail.com");
$premium = new Premium("Jane", "Doe", "jd@hotmail.com", "3");

var_dump($user1);
var_dump($premium);