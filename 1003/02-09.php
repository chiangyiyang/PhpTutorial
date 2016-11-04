<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here

        $num = 1;
        echo "第一次:" . $num . "<br>";
        $num = $num + 1;
        echo "第一次:" . $num . "<br>";
        $num++;
        echo "第一次:" . $num . "<br>";

        echo "第一次:" . ++$num . "<br>";

        echo "第一次:" . $num++ . "<br>";
        $num+=12;
        echo "第一次:" . $num . "<br>";
        $num/=17;
        echo "第一次:" . $num . "<br>";
        ?>
    </body>
</html>
