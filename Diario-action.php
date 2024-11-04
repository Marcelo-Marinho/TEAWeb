<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $_GET['anotacao'] ?> </title>
</head>

<body>

    <?php

        $listaEmote = [
            "feliz"  => "😃",
            "neutro" => "😶",
            "triste" => "🙁",
            "bravo"  => "😠",
            "doente" => "🤒",
        ];

        $var_emoji = $listaEmote[$_GET["emocao"]];

        echo "emoção: ", $_GET['emocao'], " | ", $var_emoji, " <br>";
        echo "notas: ", $_GET['anotacao'];

    ?>

</body>