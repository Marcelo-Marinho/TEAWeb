<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> whatsapp </title>
</head>

<body>

    <?php

        echo "Telefone: ", $_GET['tel'];
        
        echo "<br><a href='https://wa.me/", $_GET["tel"], "?text=aaa'> Link do whatsapp </a>";

    ?>

</body>