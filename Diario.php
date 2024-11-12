<?php
// Inclua o arquivo de conexão com o banco de dados
include_once("connect.php");

// Função para cadastrar tarefa
function novaAnotacao($usuario_id, $anotacao, $emocao) {
    global $conn;
    $sql = "INSERT INTO diario (usuario_id, anotacao, data_criacao, emocao) VALUES ('$usuario_id', '$anotacao', NOW(), '$emocao')";
    $conn->query($sql);
}

// Função para listar tarefas de um usuário
function listarAnotacoes($usuario_id) {
    global $conn;
    $sql = "SELECT * FROM diario WHERE usuario_id = '$usuario_id'";
    return $conn->query($sql);
}

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // nova anotação em diario
    $descricao = $_POST['descricao'];
    $emocao = $_POST['emocao']
    $usuario_id = 1; // Substitua pelo ID do usuário logado
    novaAnotacao($usuario_id, $descricao, $emocao);
}


$usuario_id = 1; // Exemplo de ID de usuário
$diario = listarAnotacoes($usuario_id);

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Diário </title>
</head>

<body>
    <a href="./Diario-escrever.php"> Novo registro </a>
    <?php

        $listaEmote = [
            "feliz"  => "😃",
            "neutro" => "😶",
            "triste" => "🙁",
            "bravo"  => "😠",
            "doente" => "🤒",
        ];
    ?>

    <?php if ($diario->num_rows > 0): ?>
        <?php while($nota = $diario->fetch_assoc()): ?>

            <div class="anotacao">
                <?php
                    $var_emoji = $listaEmote[$nota['emocao']];
                ?>
                <span>Status: <?= htmlspecialchars($var_emoji) ?></span>
                <span><?= htmlspecialchars($nota['anotacao']) ?></span>
            </div>

        <?php endwhile; ?>

    <?php else: ?>
        <p>Nenhuma anotação encontrada no diário.</p>
    <?php endif; ?>

    

</body>