<?php



class Calculator {

    private $products;
    private $priceWithDiscount;

    private $arrs;

    
    public function checkDiscount() {
        foreach ($this->arrs as $arr) {
            if ($productsArray[$innerProductsArray['productName']] === $discountArray[$innerDiscountArray['productName']]) {
                $this->calculateDiscount();
            }
        }
        
    }
    
    function calculateDiscount() {
        foreach ($this->products as $product) {
            $this->priceWithDiscount += $product[['productName']['productPrice']] + 0;
        }
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


if (array_column($productsArray, 'productName') === array_column($discountArray, 'productName')) {
    return;
}
