<?php
$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 450,150, $titleColor,"Bevan-Regular.ttf", "CERTIFICADO");//escreve na imagem
imagettftext($image, 32, 0, 440,350, $titleColor,"Playball-Regular.ttf", "Coisinho da rua");//escreve na imagem
//imagettftext($image, 32, 0, 450,150, $titleColor, "Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");//escreve na imagem
//imagettftext($image, 32, 0, 440,350, $titleColor, "Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Coisinho da rua");//escreve na imagem
imagestring($image, 3, 440,370, utf8_decode("Concluído em:"). date("d/m/Y"), $titleColor);
header("Content-type: image/jpeg");
imagejpeg($image);// salva o arquivo em disco

//imagejpeg($image, "certificado-".date("Y-m-d").".jpg");// salva o arquivo em disco
imagedestroy($image);