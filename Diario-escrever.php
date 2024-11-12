<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diário</title>

    <link href="style.css" rel="stylesheet">

</head>
<body>
    <form method="get" action="./Diario.php">

        <label for="emocao">Como foi seu dia hoje? </label>
        <select id="emocao" name="emocao">
            <option value="feliz" >😃</option>
            <option value="neutro">😶</option>
            <option value="triste">🙁</option>
            <option value="bravo" >😠</option>
            <option value="doente">🤒</option>
          </select><br>
        <textarea class="diary" id="anotacao" name="anotacao"></textarea><br><br>

        <input type="hidden" name="concluir" value="<?= $task['id'] ?>">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>