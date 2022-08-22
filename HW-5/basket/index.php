<?php

require_once('Product.php');
require_once('Cart.php');

$prod = new Product('telefon', 200, ['klava' => 150, 'monik' => 100]);
$prod2 = new Product('telefon2', 300, ['klava' => 150, 'monik' => 100]);
$cart = new Cart;

$cart->addProduct($prod);
$cart->addProduct($prod2);


print_r($cart);

