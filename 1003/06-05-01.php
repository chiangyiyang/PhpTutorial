<!DOCTYPE html>
<?php
include './share/inc1.inc';

?>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>

</head>
<body>

<?php
print add(123, 456) . "<br>";
print minus(123, 456) . "<br>";

echo "載入前";
//include './share/inc11.inc';
require './share/inc11.inc';
echo "載入後";


?>
</body>
</html>
