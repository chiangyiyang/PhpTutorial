<?php
if (isset($_GET["cID"])) {

    require_once '../connMysql.php';
    $sql = "SELECT * FROM `students` WHERE `cID`='" . $_GET["cID"] . "'";

    if ($result = mysqli_query($conn, $sql)) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $json_arr[] = $row;
        }
        $json_result = json_encode($json_arr);
        print $json_result;

    } else {
        print "False";
    }
} else
    echo "False"
?>