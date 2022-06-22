<?php
$im = imagecreatetruecolor(70, 16);
$black = imagecolorallocate($im, 0, 0, 0);
$white = imagecolorallocate($im, 255, 255, 255);
imagefilledrectangle($im, 0, 0, 70, 19, $white);
$harf = 'ABCDEFGHIJKLMNOPRSTUVYZqwertyuıopasdfghjklzxcvbnmi';
$harf_sayisi = mb_strlen($harf);
for ($i = 0; $i < 10; $i++){
	$secilen_harf_konumu = mt_rand(0,$harf_sayisi - 1);
	$kod .= mb_substr($harf, $secilen_harf_konumu, 1).rand(0,9);
}
$re = mb_substr($kod, 0, 8);
$font = imageloadfont('a.gdf');
imagestring($im, $font, 0, 0, $re, $black);
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>
