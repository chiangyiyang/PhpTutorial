<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>

</head>
<body>

<?php

$data = $_GET;

echo $data["username"], ($data["gender"] == "male")? "先生":"小姐", "您好!<br>";
echo "您的學歷為", $data["degree"], "<br>";
echo "您喜歡的活動如下:<br><ul>";
foreach ($data["act"] as $item){
    echo "<li>",$item, "</li>";
}
echo "</ul>";

echo "您對於使用臉書經營社群有何看法:<br>", $data["opinion"];

?>
</body>
</html>
