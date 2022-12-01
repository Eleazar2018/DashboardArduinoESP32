<?php

include 'conexao/conexao.php';

$id_cliente = $_POST['id_cliente'];
$data = $_POST['data'];
$temperatura = $_POST['temperatura'];
$umidade = $_POST['umidade'];
//$value3 = $_POST['value3'];
//$reading_time = $_POST['reading_time'];

$sql = "INSERT INTO clientes (data, temperatura, umidade) VALUES ('$data', $temperatura, $umidade)";

$inserir = mysqli_query($conexao,$sql);


header('Location: dashboard.php?pagina')
?>