<?php


// Captcha

session_start();

$characters = '0123456789abcdefghijklmnopqrstuvwxyz';
$string = '';
for ($i = 0; $i < 7; $i++) {
	$randC = $characters[random_int(0, strlen($characters) - 1)];
    $string .= random_int(0, 1) == 1 ? $randC : strtoupper($randC);
}
 
$_SESSION['rand_code'] = $string;
 
$fonts = glob('../assets/fonts/*.ttf');
$font = $fonts[array_rand($fonts)];

 
$image = imagecreatetruecolor(170, 60);
$color = imagecolorallocate($image, random_int(0, 255), random_int(0, 255), random_int(0, 255)); 
 
imagefilledrectangle($image, 0, 0, 399, 99, imagecolorallocate($image, 0, 0, 0));
imagettftext($image, random_int(20, 26), random_int(-8, 8), random_int(10, 15), random_int(40, 50), $color, $font, $_SESSION['rand_code']);
 
header("Content-type: image/png");
imagepng($image);

?>