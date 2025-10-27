<?php
include('conexao.php');

$busca = isset($_GET['q']) ? $_GET['q'] : '';

$sql = "SELECT * FROM tarefas WHERE titulo LIKE ? ORDER BY criado_em DESC";
$stmt = $conn->prepare($sql);
$like = "%$busca%";
$stmt->bind_param("s", $like);
$stmt->execute();
$result = $stmt->get_result();

$tarefas = [];
while ($row = $result->fetch_assoc()) {
    $tarefas[] = $row;
}

echo json_encode($tarefas);
?>
