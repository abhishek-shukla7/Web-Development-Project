<?php
header("Content-Type: image/png");

$image=imagecreate(800,100);

$bg=imagecolorallocate($image,255,255,255);
$text_color=imagecolorallocate($image,0,0,0);

imagestring($image,5,50,30,"BCA 6TH SEMESTER now what i don't know still figuring things out",$text_color);

imagepng($image);
imagedestroy($image);
?>

