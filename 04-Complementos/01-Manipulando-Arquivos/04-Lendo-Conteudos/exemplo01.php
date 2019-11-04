<?php
# Fgets retorna a linha do arquivo até ela existir
$filename = "usuarios.csv";
if(file_exists($filename)){
    $file = fopen($filename,"r");// n~~ao precisa por o + pq já verificou que o arquivo existe
    $headers = explode(",",fgets($file));//pega a primeira linha do arquivo
    $data = array();
    while($row = fgets($file)){
        $rowData = explode(",",$row);
        $linha = array();
        for($i = 0 ;$i <count($headers) ; $i++){
            $linha[$headers[$i]] = $rowData[$i];// posição do hedeais criando na chave linha
            
        }

        array_push($data,$linha); //inputa o array linha no array data
    }
    fclose($file);
    echo json_encode($data);
}