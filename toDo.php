<?php
// Inclua o arquivo de conexão com o banco de dados
include_once("connect.php");

// Função para cadastrar tarefa
function cadastrarTarefa($usuario_id, $descricao) {
    global $conn;
    $sql = "INSERT INTO tarefas (usuario_id, descricao, status, data_criacao) VALUES ('$usuario_id', '$descricao', 'pendente', NOW())";
    $conn->query($sql);
}

// Função para listar tarefas de um usuário
function listarTarefas($usuario_id) {
    global $conn;
    $sql = "SELECT * FROM tarefas WHERE usuario_id = '$usuario_id'";
    return $conn->query($sql);
}

// Função para concluir tarefa
function concluirTarefa($tarefa_id) {
    global $conn;
    $sql = "UPDATE tarefas SET status = 'concluída' WHERE id = '$tarefa_id'";
    $conn->query($sql);
}

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['descricao'])) {
        // Cadastrar nova tarefa
        $descricao = $_POST['descricao'];
        $usuario_id = 1; // Substitua pelo ID do usuário logado
        cadastrarTarefa($usuario_id, $descricao);
    } elseif (isset($_POST['concluir'])) {
        // Concluir tarefa
        $tarefa_id = $_POST['concluir'];
        concluirTarefa($tarefa_id);
    }
}

// ID do usuário logado (substitua com a lógica de autenticação do seu sistema)
$usuario_id = 1; // Exemplo de ID de usuário
$tarefas = listarTarefas($usuario_id);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        .task-list {
            margin-top: 20px;
        }
        .task {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }
        .task.completed {
            text-decoration: line-through;
            color: gray;
        }
    </style>
</head>
<body>

<h1>Lista de Tarefas</h1>

<!-- Formulário para adicionar uma nova tarefa -->
<form method="POST">
    <input type="text" name="descricao" placeholder="Descrição da tarefa" required>
    <button type="submit">Adicionar Tarefa</button>
</form>

<!-- Lista de tarefas -->
<div class="task-list">
    <?php if ($tarefas->num_rows > 0): ?>
        <?php while($task = $tarefas->fetch_assoc()): ?>
            <div class="task <?= $task['status'] === 'concluída' ? 'completed' : '' ?>">
                <span><?= htmlspecialchars($task['descricao']) ?></span>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="concluir" value="<?= $task['id'] ?>">
                    <button type="submit">Concluir</button>
                </form>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>Nenhuma tarefa encontrada.</p>
    <?php endif; ?>
</div>

</body>
</html>