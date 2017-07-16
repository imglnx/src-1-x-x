<?php

// Image type
$ext = htmlspecialchars($_GET['ext']);

$allowedExt = ['jpeg', 'jpg', 'png', 'gif', 'bmp', 'ico', 'tiff', 'webm'];

$image = imagecreatetruecolor(64, 64);
$color = imagecolorallocate($image, 255, 255, 255); 

imagefilledrectangle($image, 0, 0, 399, 99, imagecolorallocate($image, 0, 0, 0));
imagettftext($image, 16, 0, 10, 40, $color, "../assets/fonts/Arial-Regular.ttf", in_array($ext, $allowedExt) && isset($ext) ? $ext : '403');

header("Content-type: image/png");
imagepng($image);


?>