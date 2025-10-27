<?php
include('conexao.php');

$titulo = $_POST['titulo'];

if (!empty($titulo)) {
    $sql = "INSERT INTO tarefas (titulo) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $titulo);
    $stmt->execute();
    echo "Tarefa adicionada com sucesso!";
}
?>
