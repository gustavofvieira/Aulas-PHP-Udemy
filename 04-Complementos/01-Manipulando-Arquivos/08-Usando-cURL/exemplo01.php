<?php

$cep = "40393030";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER , 1);//retorna o valor

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , 0);// verifica se está autenticado em uma entidade autenticadora

$response = curl_exec($ch); // manda executar para a URL
curl_close($ch);

$data = json_decode($response, true);
print_r($data);
print_r($data["logradouro"]);


