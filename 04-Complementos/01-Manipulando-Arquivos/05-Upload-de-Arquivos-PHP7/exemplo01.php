<form method="post" enctype="multipart/form-data">
    <input type="file" name="fileUpload">
    <button type="submit">Enviar</button>
</form>
<!--se não por o enctype="multipart/form-data" no form o php nao envia o dado-->


<?php
//$_SERVER["REQUEST_METHOD"] GUARDA QUAL O TIPO DE SOLICITAÇÃO
//$_FILES["fileUpload"] array super global que leva o arquivo passando por parametro no name
//move_uploaded_file($file["tmp_name"],$dirUploads . DIRECTORY_SEPARATOR . $file["name"]) , move o arquivo que foi feito o download de uma pasta temporária para a do servidor
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $file = $_FILES["fileUpload"];
    if($file["error"]){
        throw new Excepction("Error: ". $file["error"]);
    }

    $dirUploads = "uploads";
    if(!is_dir($dirUploads)){
        mkdir($dirUploads);
    }

    if(move_uploaded_file($file["tmp_name"],$dirUploads . DIRECTORY_SEPARATOR . $file["name"])){
        echo "Upload Realizado com sucesso!";
    }else{
        throw new Excepction("Não foi possível realizar o upload");    
    }
}