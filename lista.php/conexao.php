<?php
$host = "localhost";
$usuario = "root";   // padrão do XAMPP
$senha = "";
$banco = "lista_tarefas_KD";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
