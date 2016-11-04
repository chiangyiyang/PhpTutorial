<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        
        function sumN2N($begin, $end){
            $sum = 0;
            for($i=$begin;$i<=$end;$i++){
                $sum += $i;
            }
            return $sum;
        }
        
        //輸入2變數，輸出4變數
        function in2out4($a, $b){
            $sum = $a + $b;
            $sub = $a - $b;
            $mul = $a * $b;
            $div = $a / $b;
            
            return array($sum,$sub,$mul,$div);
        }
        
        
        echo "Ans:".  sumN2N(5, 10)."<br><hr>";

        $arrVal = in2out4(50, 20);
        for($i=0;$i<count($arrVal);$i++){
            echo $arrVal[$i]."<br>";
        }
        
//        header("Location:http://www.google.com");
        ?>
    </body>
</html>
