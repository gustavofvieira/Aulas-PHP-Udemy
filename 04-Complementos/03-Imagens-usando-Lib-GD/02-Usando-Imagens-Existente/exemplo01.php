<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450,150, "CERTIFICADO", $titleColor);//escreve na imagem
imagestring($image, 5, 440,350, "Coisinho da rua", $titleColor);//escreve na imagem
imagestring($image, 3, 440,370, utf8_decode("Concluído em:"). date("d/m/Y"), $titleColor);
header("Content-type: image/jpeg");
imagejpeg($image, "certificado-".date("Y-m-d").".jpg");// salva o arquivo em disco
imagedestroy($image);