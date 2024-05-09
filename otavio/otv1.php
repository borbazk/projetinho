<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $preco = $_GET["p"];
    echo "O preco do produto e R$ $preco";
    $preco -= ($preco*10/100);
    echo "<br/>E o novo preco com 10% de desconto sera R$ $preco";
    ?>
</body>
</html>