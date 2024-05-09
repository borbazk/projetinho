<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $d = isset($_GET["ds"]) ? $_GET["ds"] : 0;
    $estado="";
    switch ($d) {
        case 1:
            $estado = " Norte";
            break;
        case 2:
            $estado = " Nordeste";
            break;
        case 3:
            $estado = " Centro Oeste";
            break;
        case 4:
            $estado = "Sudeste";
            break;
        case 5:
            $estado = " Sul";
            break;
        default:
            $estado = "desconhecida ";
            break;
    }
    
    echo "Voce mora na Regiao $estado";
    ?>
</body>

</html>