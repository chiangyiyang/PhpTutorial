<?php
require_once '../connMysql.php';
$sql = "SELECT * FROM `students` ORDER BY `cID`";

if ($result = mysqli_query($conn, $sql)) {
    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $json_arr[] = $row;
//        print_r($row);
    }
//    print_r( $json_arr);

    $json_result = json_encode($json_arr);
    print $json_result;

}else{
    print "False";

}

mysqli_close($conn);
?>

