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
        $name = "tony";
        $user1 = "mary";
        $user2 = "bill";
        
        //echo
        echo("測試echo<br>");
        echo "測試echo<br>";
        echo $user1,$user2;
        echo "Hi!".$name."<BR>";
        echo "HI! $name $user1<BR>";
        echo ("Hi!".$name." ".$user1."<BR>");
        echo("Hi $name <br>");
        
        //print
        print("測試echo<br>");
        print "測試echo<br>";
        print "Hi!".$name."<BR>";
        print "HI! $name $user1<BR>";
        print ("Hi!".$name." ".$user1."<BR>");
        print("Hi $name <br>");
                
        ?>
    </body>
</html>
