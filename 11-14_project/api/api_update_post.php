<?php

if (isset($_POST["cID"]) && isset($_POST["cName"]) && isset($_POST["cSex"]) && isset($_POST["cBirthday"])
    && isset($_POST["cEmail"]) && isset($_POST["cPhone"]) && isset($_POST["cAddr"])
) {

    require_once '../connMysql.php';

    $sql = "UPDATE `students` SET ";
    $sql .= "`cName` = '" . $_POST["cName"] . "',";
    $sql .= "`cSex` = '" . $_POST["cSex"] . "',";
    $sql .= "`cBirthday` = '" . $_POST["cBirthday"] . "',";
    $sql .= "`cEmail` = '" . $_POST["cEmail"] . "',";
    $sql .= "`cPhone` = '" . $_POST["cPhone"] . "',";
    $sql .= "`cAddr` = '" . $_POST["cAddr"] . "' ";
    $sql .= " WHERE `cID` = '" . $_POST["cID"] . "'";


    mysqli_query($conn, $sql);

    mysqli_close($conn);
    echo "True";
} else
    echo "False"

?>