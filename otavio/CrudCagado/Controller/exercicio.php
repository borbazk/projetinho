<?php
//$_GET[];
/*24 % 5 = 4
24 / 5= 4.8
7 % 7  = 0*/
//var_dump($_GET);
$operacao = $_GET['operacao'];
$valor =  $_GET['valor'];
$totDivisores = 0;
if ($operacao == 'verificar') {
    //$resultado = $valor % $valor;
    for ($i = 2; $i < $valor; $i++){
        if ($valor % $i == 0) {
            $totDivisores++;
        }
    }
    
    if ($totDivisores){
        echo "Nao e, tem $totDivisores divisores alem de 1 e ele mesmo";
        
    } else{
        echo "E primo!";
    }
}
echo $totDivisores;

//var_dump($valor);
