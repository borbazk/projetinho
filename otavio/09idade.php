<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
    $ano = isset($_GET["ano"])?$_GET["ano"]:0;
    $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo}";
    $idade = date("Y") - $ano;
    echo "$nome e $sexo e tem $idade anos. ";
    ?>
    <a href="otv9.html">voltar</a>
</body>
</html>