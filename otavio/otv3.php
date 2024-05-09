<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 3;
    $b = &$a;
    $b += 5;
    echo "O valor de A e $a" ;
    echo "<br/>O valor de B e $b";

    ?>
</body>
</html>