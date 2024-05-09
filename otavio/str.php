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
        $nome = "BORBAZK";
        $nome2 = strtolower($nome);
        echo "Seu nome e $nome2";

        echo "<br>";

        $nome = "borbazk";
        $nome2 = strtoupper($nome);
        echo "Seu nome e $nome2";

        echo "<br>";

        $nome = "borbaZK";
        $nome2 = ucfirst($nome);
        echo "Seu nome e $nome2";

        echo "<br>";

        $nome = "borba zk";
        $nome2 = ucwords($nome);
        echo "Seu nome e $nome2";

        echo "<br>";

        $nome = "BORBA ZK";
        print(strrev($nome));

        echo "<br>";

        $site = "curso em video";
        $sub = substr($site,0,-2);
        echo "$sub ";

        echo "<br>";

        $nome = "Guanabara";
        $novo = str_pad($nome, 30, ".", STR_PAD_RIGHT);
        var_dump("meu professor $novo e o melhor");

        echo "<br>";

        $nome = "Guanabara";
        $novo = str_pad($nome, 30, ".", STR_PAD_BOTH);
        var_dump("meu professor $novo e o melhor");

        echo "<br>";

        $nome = "Guanabara";
        $novo = str_pad($nome, 30, ".", STR_PAD_LEFT);
        var_dump("meu professor $novo e o melhor"); 

        echo "<br>";

        $txt= str_repeat("PHP",5);
        print("O texto gerado foi $txt");
        print(str_repeat("-",20));
        
        echo "<br>";

        $frase = "Gosto de estudar Matematica";
        $novafrase = str_ireplace("matematica", "PHP", $frase);
        echo"$novafrase";
    ?>
</div>   
</body>
</html>