<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $c = 1;
        if ($c <= 100) {
            echo $c . "--";
            $c++;
        }
        
    ?>
    <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</body>
</html>