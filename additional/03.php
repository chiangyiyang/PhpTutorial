<?php
$arr = array('a'=>1, 'b'=>2, 'c'=>3, 'd'=>4,'e'=>10);

$result = json_encode($arr);

echo $result;
echo "<HR>";

//物件
$object = json_decode($result);
print_r($object);
echo "<hr>";

echo $object->a. "<br>";
echo $object->b. "<br>";

//陣列
echo "<hr>";
$arr = json_decode($result,true);
print_r($arr);
echo "<br>";
echo $arr['a']."<br>";
echo $arr['b']."<br>";

?>