<?php
$conn = new mysqli("localhost", "root", "", "dbphp7");
if($conn->connect_error){
    echo "ERROR: ".$conn->connect_error;
    exit;
}

//$result = $conn->query("select * from tb_usuarios order by deslogin");
//while ($row = $result->fetch_array()){ //o fetch_array retorna o dado se existir
//    var_dump($row);
//}

$data = array();

$result2 = $conn->query("select * from tb_usuarios order by deslogin");
while ($row2 = $result2->fetch_assoc()){ //o fetch_array retorna o dado se existir
    array_push($data,$row2);
}

echo json_encode($data);


