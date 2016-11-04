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

$result = json_encode($cart);

echo $result;
echo "<HR>";

//物件
$obj = json_decode($result);
print_r($obj);
echo "<hr>";

echo  $obj->orderID."<BR>";
echo  $obj->shopperEmail."<BR>";
echo  $obj->contents[0]->productID."<BR>";
echo  $obj->contents[1]->productID."<BR>";
echo  $obj->contents[1]->quantity."<BR>";


//陣列
$obj = json_decode($result,true);
print_r($obj);
echo "<hr>";

echo  $obj["orderID"]."<BR>";
echo  $obj["shopperEmail"]."<BR>";
echo  $obj["contents"][0]["productID"]."<BR>";
echo  $obj["contents"][1]["productID"]."<BR>";
echo  $obj["contents"][1]["quantity"]."<BR>";

?>