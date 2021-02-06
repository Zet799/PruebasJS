<?php

$name = $_POST['nombre'];
$region = $_POST['region'];

$foto = $_FILES['foto']['name'];
$cont = count($_POST);

$response = json_encode(array('name' => $name, 'region' => $region, 'foto' => $foto, 'contador' => $cont));

echo $response;
?>