<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes aritmeticas em PHP</title>
    <style>
        h2 {
            font: 15pt Arial;
            color: #171559;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    $n1 = $_GET["x"];
    $n2 = $_GET["y"];
    echo "<h2>Valores recebidos: $n1 e $n2</h2>";
    echo "O valor absoluto de $n2 e ". abs($n2);
    echo "<br/>O valor de $n1<sup>$n2</sup> e ". pow($n1, $n2);
    echo "<br/>A raiz de $n1 e ". sqrt($n1);
    echo "<br/>O valor de $n2 arredondado e ". round($n2);
    echo "<br/>A parte inteira de $n2 e ". intval($n2);
    echo "<br/>O valor de $n1 em moeda e R$". number_format($n1,2);
    ?>
</body>
</html>