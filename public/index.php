<?php

class Product {
    private $productName;
    private $productPrice;

    function __construct($productName, $productPrice) {
        $this->productName = $productName;
        $this->productPrice = $productPrice;
    }

    function getProductPrice() {
        return $this->productPrice;
    }

    function getProductName() {
        return $this->productName;
    }
}


$productsArray = [
    "Shirt" => 50,
    "Pants" => 100,
    "Shoes" => 200
];




$product1 = new Product (key($productsArray), $productsArray["Shirt"]);

echo $product1->getProductPrice();