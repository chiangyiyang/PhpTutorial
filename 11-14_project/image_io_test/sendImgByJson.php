<?php
//// Create a blank image and add some text
//$im = imagecreatetruecolor(120, 20);
//$text_color = imagecolorallocate($im, 233, 14, 91);
//imagestring($im, 1, 5, 5,  'A Simple Text String', $text_color);
//
//// Set the content type header - in this case image/jpeg
//header('Content-Type: image/jpeg');
//
//// Output the image
//imagejpeg($im);
//
//// Free up memory
//imagedestroy($im);
//?>

<?php
function LoadPng($imgname)
{
    /* Attempt to open */
    $im = @imagecreatefrompng($imgname);

    /* See if it failed */
    if(!$im)
    {
        /* Create a black image */
        $im  = imagecreatetruecolor(150, 30);
        $bgc = imagecolorallocate($im, 255, 255, 255);
        $tc  = imagecolorallocate($im, 0, 0, 0);

        imagefilledrectangle($im, 0, 0, 150, 30, $bgc);

        /* Output an error message */
        imagestring($im, 1, 5, 5, 'Error loading ' . $imgname, $tc);
    }

    return $im;
}


$my_img = LoadPng('apple.png');
//$text_color = imagecolorallocate($my_img, 233, 14, 91);
//imagestring($my_img, 1, 5, 5,  'A Simple Text String', $text_color);

ob_start();
imagepng($my_img);
$imageData = ob_get_contents();
ob_clean();
imagedestroy($my_img);

$results = array(
    'price' => "qqq",
    'image' => base64_encode($imageData)
);

$json = json_encode($results);
echo $json;

?>
