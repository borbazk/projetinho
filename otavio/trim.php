<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <?php
        $nome = "   jose da silva   ";
        echo(strlen($nome));
        $novo = trim($nome);
        echo($novo);
        echo(strlen($novo));

        echo"<br>";

        $nome = "   jose da silva   ";
        echo(strlen($nome));
        $novo = ltrim($nome);
        echo($novo);
        echo(strlen($novo));

        echo"<br>";
        
        $nome = "   jose da silva   ";
        echo(strlen($nome));
        $novo = rtrim($nome);
        echo($novo);
        echo(strlen($novo));
    ?>
</div>
</body>
</html>