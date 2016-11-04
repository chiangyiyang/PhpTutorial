<?php

if(isset($_GET["cName"]) && isset($_GET["cSex"]) && isset($_GET["cBirthday"])
    && isset($_GET["cEmail"]) && isset($_GET["cPhone"]) && isset($_GET["cAddr"])){

    require_once '../connMysql.php';

    $sql = "INSERT INTO `students` (`cName`, `cSex`, `cBirthday`, `cEmail`, `cPhone`, `cAddr`) VALUES ('";
    $sql .= $_POST["cName"] . "','";
    $sql .= $_POST["cSex"] . "','";
    $sql .= $_POST["cBirthday"] . "','";
    $sql .= $_POST["cEmail"] . "','";
    $sql .= $_POST["cPhone"] . "','";
    $sql .= $_POST["cAddr"] . "')";

    mysqli_query($conn, $sql);

    mysqli_close($conn);
}

?>