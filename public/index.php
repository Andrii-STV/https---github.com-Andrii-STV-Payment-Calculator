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


class Discount {
    private $products;
    private $discount;
    private $priceWithDiscount;

    function __construct($discount) {
        $this->discount = $discount;
    }

    function addProduct ($product) {
        $this->products[] = $product;
    }

    function calculateDiscount() {
        foreach ($this->products as $product) {
            $this->priceWithDiscount += $product->getProductPrice() - ($product->getProductPrice() * $this->discount / 100);
        }
    }

    function implyTax() {
        $this->priceWithDiscount = $this->priceWithDiscount * 0.85;
    }

    
    function getPriceWithDiscount() {
        return $this->priceWithDiscount;
    }
}


$productsArray = [
    [ 'productName' => 'Shirt', 'productPrice' => 50 ],
    [ 'productName' => 'Pants', 'productPrice' => 100 ],
    [ 'productName' => 'Shoes', 'productPrice' => 200 ]
];


$discountArray = [
    [ 'productName' => 'Shirt', 'discount' => 20 ],
    [ 'productName' => 'Pants', 'discount' => 10 ]
];




$product1 = new Product (key($productsArray), $productsArray["Shirt"]);
$product2 = new Product (key($productsArray), $productsArray["Pants"]);
$product3 = new Product (key($productsArray), $productsArray["Shoes"]);

$discount1 = new Discount ($discountArray["Shirt"]);
$discount2 = new Discount ($discountArray["Pants"]);

$discount1->addProduct($product1);
$discount2->addProduct($product2);


$discount1->calculateDiscount();
$discount2->calculateDiscount();

echo $discount1->getPriceWithDiscount() + $discount2->getPriceWithDiscount();