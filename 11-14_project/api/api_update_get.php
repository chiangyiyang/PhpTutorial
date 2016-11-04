<?php

if (isset($_GET["cID"]) && isset($_GET["cName"]) && isset($_GET["cSex"]) && isset($_GET["cBirthday"])
    && isset($_GET["cEmail"]) && isset($_GET["cPhone"]) && isset($_GET["cAddr"])
) {

    require_once '../connMysql.php';

    $sql = "UPDATE `students` SET ";
    $sql .= "`cName` = '" . $_GET["cName"] . "',";
    $sql .= "`cSex` = '" . $_GET["cSex"] . "',";
    $sql .= "`cBirthday` = '" . $_GET["cBirthday"] . "',";
    $sql .= "`cEmail` = '" . $_GET["cEmail"] . "',";
    $sql .= "`cPhone` = '" . $_GET["cPhone"] . "',";
    $sql .= "`cAddr` = '" . $_GET["cAddr"] . "' ";
    $sql .= " WHERE `cID` = '" . $_GET["cID"] . "'";


    mysqli_query($conn, $sql);

    mysqli_close($conn);
    echo "True";
} else
    echo "False"

?>