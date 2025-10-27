<?php
include('conexao.php');

$id = $_POST['id'];

$sql = "DELETE FROM tarefas WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

echo "Tarefa removida!";
?>
