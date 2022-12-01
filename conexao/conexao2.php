<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$bd = 'dash1';


$mysqli = new mysqli($host, $user, $pass, $bd);
echo "Conexão realizada com sucesso";


if($mysqli->connect_errno) {
	die("Falha ao conectar ao banco de dados: " . $mysqli->connect_errno);
	exit();
}

?>