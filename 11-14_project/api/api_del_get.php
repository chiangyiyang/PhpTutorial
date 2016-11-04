<?php

if (isset($_GET["cID"])) {

    require_once '../connMysql.php';

    $sql = "DELETE FROM `students` WHERE `cID`='" . $_GET["cID"] . "'";

    echo $_GET["cID"]."<BR>";
    echo $sql."<BR>";


    mysqli_query($conn, $sql);

    mysqli_close($conn);
    echo "True";
} else
    echo "False"

?>