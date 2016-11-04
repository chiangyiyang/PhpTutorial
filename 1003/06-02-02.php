<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <?php
    print_r($_POST);
    echo "<hr>";
    if ($_POST["usrname"] == "abc" && $_POST["passwd"] == "123")
        $login = "yes";
    else
        $login = "no";
    ?>
</head>
<body>

<?php
if ($login == "yes")
    print "登入成功";
else
    print "登入失敗";


?>
</body>
</html>
