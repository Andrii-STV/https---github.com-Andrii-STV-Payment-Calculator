<?php

$productsArray = [
    [ 'productName' => 'Shirt', 'productPrice' => 50 ],
    [ 'productName' => 'Pants', 'productPrice' => 100 ],
    [ 'productName' => 'Shoes', 'productPrice' => 200 ]
];


$discountArray = [
    [ 'productName' => 'Shirt', 'discount' => 20 ],
    [ 'productName' => 'Pants', 'discount' => 10 ]
];



$newProducts = array_column($productsArray, 'productName');
$newDiscount = array_column($discountArray, 'productName');


foreach ($newDiscount as $key => $productName) {


    if (in_array($productName, $newProducts, true)) {
        echo "discount should be applied<br>";
    }

}

echo '<br><hr><br>';
var_dump($productsArray);
echo '<br><br>';
var_dump($newProducts);
echo '<br><br>';
var_dump($newDiscount);
