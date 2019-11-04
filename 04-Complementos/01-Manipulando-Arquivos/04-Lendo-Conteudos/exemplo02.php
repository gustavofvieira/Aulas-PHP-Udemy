<?php
$filename = "hcode.png";

$base64 = base64_encode(file_get_contents($filename));// file_get_contents ler o conteudo do arquivo inteiro retorna em binário // 
$fileinfo = new finfo(FILEINFO_MIME_TYPE);// constante que mede o tipo do arquivo
$mimetype = $fileinfo->file($filename);

$base64encode = "data:".$mimetype.";base64,". $base64;
?>
<a href="<?=$base64encode?>" target= "_blank">Link Para Imagem</a>
<img src="<?=$base64encode?>">