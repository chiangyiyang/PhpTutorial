<?php

if (isset($_POST["cID"])) {

    require_once '../connMysql.php';

    $sql = "DELETE FROM `students` WHERE `cID`='" . $_POST["cID"] . "'";


    mysqli_query($conn, $sql);

    mysqli_close($conn);
    echo "True";
} else
    echo "False"

?>