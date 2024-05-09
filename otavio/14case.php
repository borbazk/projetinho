<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $d = isset($_GET["ds"])?$_GET["ds"]:0;
        switch ($d) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "levanta e vai estudar! ;)";
                break;
            case 7:
            case 8:
                echo "descanse pequeno gafanhoto!";
                break;
            default:
                echo "Dia da semana invalido";
        }

    ?>
    <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</body>
</html>