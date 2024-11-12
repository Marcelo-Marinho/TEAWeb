<?php
// Inclua o arquivo de conexão com o banco de dados
include_once("connect.php");
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova anotação</title>

    <link href="style.css" rel="stylesheet">

</head>
<body>
    <form method="post" action="./Diario.php">

        <label for="emocao">Como foi seu dia hoje? </label>
        <select id="emocao" name="emocao">
            <option value="feliz" >😃</option>
            <option value="neutro">😶</option>
            <option value="triste">🙁</option>
            <option value="bravo" >😠</option>
            <option value="doente">🤒</option>
          </select><br>
        <textarea class="diary" id="descricao" name="descricao"></textarea><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>