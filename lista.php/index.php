<?php include('conexao.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>📝 Lista de Tarefas</h1>

        <form id="form-tarefa">
            <input type="text" id="titulo" placeholder="Digite uma nova tarefa" required>
            <button type="submit">Adicionar</button>
        </form>

        <input type="text" id="pesquisar" placeholder="Pesquisar tarefa...">

        <ul id="lista-tarefas"></ul>
    </div>

    <script src="script.js"></script>
</body>
</html>
