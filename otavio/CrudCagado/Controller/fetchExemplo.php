<?php

$dados = file_get_contents('php://input');
$objeto = json_decode($dados);
//var_dump($objeto);
$valor1 = $objeto->valor1;
$valor2 = $objeto->valor2;
$valor3 = $objeto->valor3;
$operacao = $objeto->operacao;


if ($operacao == 'somar')        $resultado = $valor1 + $valor2 + $valor3;
if ($operacao == 'multiplicar')  $resultado = $valor1 * $valor2 * $valor3;
if ($operacao == 'divisao')      $resultado = $valor1 / $valor2 / $valor3;
if ($operacao == 'subtrair')     $resultado = $valor1 - $valor2 - $valor3;
if ($resultado < 0)              $resultado = 0 ;
echo $resultado;

?>