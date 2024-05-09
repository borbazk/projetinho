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
        $t = "Aqui temos um texto gigante criado pelo php e vai mostrar o funcionamento da funcao wordwrap";
        $r = wordwrap($t, 5, "</br>\n", false);
        echo($r)
    ?>
</div>
</body>
</html>