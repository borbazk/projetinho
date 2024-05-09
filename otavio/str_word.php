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
        $frase = "Eu vou estudar PHP";
        $cont = str_word_count($frase,0);
        echo $cont;

        echo"<br>";

        $frase = "Eu vou estudar PHP";
        $cont = str_word_count($frase,1);
        print_r($cont);

        echo"<br>";

        $frase = "Eu vou estudar PHP";
        $cont = str_word_count($frase,2);
        print_r($cont);
    ?>
</div>
</body>
</html>