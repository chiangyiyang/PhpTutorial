<?php
if (isset($_GET["cID"])) {

    require_once '../connMysql.php';

    $sql = "SELECT * FROM `students` WHERE `cID`='" . $_GET["cID"] . "'";


    if ($result = mysqli_query($conn, $sql)) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        function LoadJpeg($imgname)
        {
            /* Attempt to open */
            $im = @imagecreatefromjpeg($imgname);

            /* See if it failed */
            if (!$im) {
                /* Create a black image */
                $im = imagecreatetruecolor(250, 30);
                $bgc = imagecolorallocate($im, 255, 255, 255);
                $tc = imagecolorallocate($im, 0, 0, 0);

                imagefilledrectangle($im, 0, 0, 150, 30, $bgc);

                /* Output an error message */
                imagestring($im, 1, 5, 5, 'Error loading ' . $imgname, $tc);
            }

            return $im;
        }

//        print_r('jpg/'.$row["cName"] . '.jpg');
        $im = LoadJpeg('jpg/'.$row["cID"] .'.jpg');

        header('Content-Type: image/jpeg');
        imagejpeg($im);
        imagedestroy($im);
    }
    mysqli_close($conn);

}

?>
