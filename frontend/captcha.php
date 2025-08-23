<?php
session_start();

// Generate random captcha code
$code = substr(str_shuffle("ABCDEFGHJKLMNPQRSTUVWXYZ23456789"), 0, 6);
$_SESSION["captcha"] = $code;

// Create image
$image = imagecreate(100, 40);
$bg = imagecolorallocate($image, 204, 204, 204); // Background: light gray
$text_color = imagecolorallocate($image, 0, 0, 0); // Black text

// Add the text
imagestring($image, 5, 15, 10, $code, $text_color);

// Set headers
header("Content-type: image/png");
imagepng($image);
imagedestroy($image);
?>
