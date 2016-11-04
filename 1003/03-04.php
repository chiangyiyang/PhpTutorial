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
        
//        $hour = 11;
//        $str = ($hour>=12)? "PM" : "AM";
//        $hour = ($hour>=12)? $hour - 12: $hour;
//        print "<bt>目前時間:".$hour.$str;
        
        date_default_timezone_set("Asia/Taipei");
        echo date("H:i:s");
        
        
        ?>
    </body>
</html>
