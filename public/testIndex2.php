<?php

//Given arrays 

$productsArray = [
    [ 'productName' => 'Shirt', 'productPrice' => 50 ],
    [ 'productName' => 'Pants', 'productPrice' => 100 ],
    [ 'productName' => 'Shoes', 'productPrice' => 200 ]
];


$discountArray = [
    [ 'productName' => 'Shirt', 'discount' => 20 ],
    [ 'productName' => 'Pants', 'discount' => 10 ]
];


//Trying to filter each default array into new array by the product name; i.e. instead of [productName] => 'Shirt' we have [0] => 'Shirt' 
$newProducts = array_column($productsArray, 'productName');
$newDiscount = array_column($discountArray, 'productName');



foreach ($newDiscount as $key => $productName) {                       //count through newDiscount array 


    if (in_array($productName, $newProducts, true)) {                  //here in $productName values 'Shirt' and 'Pants' are stored which are taken from newDiscount array, but we check newProduct array
        
        $calculate;
        echo "discount should be applied<br>";

    }

}

function testPrint($item, $key) {
    echo "$key holds $item<br>";
}



$productName = 'productName';

foreach ($poductsArray as $product) {
    if ($product[$productName] === $newDiscount)
}





array_walk_recursive($productsArray, 'testPrint');



echo '<br><hr><br>';
var_dump($productsArray);
echo '<br><br>';
var_dump($newProducts);
echo '<br><br>';
var_dump($newDiscount);
