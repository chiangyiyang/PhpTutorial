<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
// put your code here
$grades = array(45, 78, 65, 87);

$grades[2] = 60;
$total = 0;
for ($i = 0; $i < count($grades); $i++) {
    echo "$i = $grades[$i]<br>";
    $total += $grades[$i];
}
echo "<hr><br>Total = $total<hr><br>";

$weekdays[] = 'Sum';
$weekdays[] = 'Mon';
$weekdays[] = 'Tue';
$weekdays[] = 'Wed';
$weekdays[] = 'Thu';
$weekdays[] = 'Fri';
$weekdays[] = 'Sat';
$weekdays[2] = 'Tuesday';

foreach ( $weekdays as $day){
    echo $day."<br>";
}

?>
</body>
</html>
