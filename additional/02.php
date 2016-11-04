<?php
$cart = array(
    "orderID"=>12345,
    "shopperName"=>'John Smith',
    "shopperEmail"=>"john@gmail.com",
    "contents" => array(
        array(
            "productID" => 14,
            "productName" => "SuperWidget",
            "quantity" => 1
        ),
        array(
            "productID" => 56,
            "productName" => "WonderWidget",
            "quantity" => 3
        )
    ),

    "orderComplete" => true
);

echo json_encode($cart);
?>